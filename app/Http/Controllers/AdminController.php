<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function all_users(){
        $currentUser = Auth::user();
        $users = User::where('id', '!=', $currentUser->id)->get();
        return view('admin.all_users', compact('users'));
    }

    public function ban_user($id){
        $user = User::find($id);
        $user->banned_status = "1";
        $user->save();
        Alert::html(
            '<h3 style="color:black;">User Banned Successfully!</h3>',
            '<p style="color:black;">You have successfully Banned this User.</p>',
            'success'
        )->persistent();
        return redirect()->back();
    }

    public function unban_user($id){
        $user = User::find($id);
        $user->banned_status = "0";
        $user->save();
        Alert::html(
            '<h3 style="color:black;">User UnBanned Successfully!</h3>',
            '<p style="color:black;">You have successfully UnBanned this User.</p>',
            'success'
        )->persistent();
        return redirect()->back();
    }

    public function delete_user($id){
        $user = User::find($id);
        $user->delete();
        Alert::html(
            '<h3 style="color:black;">Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully Deleted this User.</p>',
            'success'
        )->persistent();
        return redirect()->back();
    }

    public function add_product(){
        return view('admin.add_product');
    }

    public function create_product(Request $request)
{
    \Log::info('Form submission attempt', $request->all());

    try {
        $validated = $request->validate([
            'product_title' => 'required|string|max:255',
            'product_description' => 'required|string',
            'product_oldprice' => 'required|numeric',
            'product_newprice' => 'required|numeric',
            'product_photo' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'product_photo2' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        // Ensure directory exists
        $storagePath = storage_path('app/public/product_photos');
        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true);
        }

        // Store product_photo
        if (!$request->file('product_photo')->isValid()) {
            throw new \Exception('Primary photo is not valid');
        }
        $path1 = $request->file('product_photo')->store('product_photos', 'public');

        // Store product_photo2 (optional)
        $path2 = null;
        if ($request->hasFile('product_photo2') && $request->file('product_photo2')->isValid()) {
            $path2 = $request->file('product_photo2')->store('product_photos', 'public');
        }

        // Create product
        $product = products::create([
            'product_title' => $validated['product_title'],
            'product_description' => $validated['product_description'],
            'product_oldprice' => $validated['product_oldprice'],
            'product_newprice' => $validated['product_newprice'],
            'product_photo' => Storage::url($path1),
            'product_photo2' => $path2 ? Storage::url($path2) : null,
        ]);

        \Log::info('Product created successfully', $product->toArray());

        Alert::success('Success!', 'Product created successfully');
        return back();

    } catch (\Illuminate\Validation\ValidationException $e) {
        \Log::error('Validation failed', ['errors' => $e->errors()]);
        return back()->withErrors($e->errors());

    } catch (\Exception $e) {
        \Log::error('Product creation failed', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);

        Alert::error('Error', 'Failed to create product: ' . $e->getMessage());
        return back();
    }
}


public function manage_product(){
    $products = products::all();
    return view('admin.manage_product', compact('products'));
}

public function delete_product($id){
    $product = products::find($id);
    $product->delete();
    Alert::html(
            '<h3 style="color:black;">Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully Deleted this Product.</p>',
            'success'
        )->persistent();
        return redirect()->back();
}

public function edit_product($id){
    $product = products::find($id);
    return view('admin.edit_product', compact('product'));
}

public function edit_a_product(Request $request, $id)
{
    \Log::info('Product edit attempt for ID: ' . $id, $request->all());

    try {
        $validated = $request->validate([
            'product_title' => 'required|string|max:255',
            'product_description' => 'required|string',
            'product_oldprice' => 'required|numeric',
            'product_newprice' => 'required|numeric',
            'product_photo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'product_photo2' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $product = products::findOrFail($id);

        // Update product_photo if provided
        if ($request->hasFile('product_photo')) {
            if ($product->product_photo) {
                $oldPath = str_replace('/storage', 'public', $product->product_photo);
                Storage::delete($oldPath);
            }

            $path = $request->file('product_photo')->store('product_photos', 'public');
            $validated['product_photo'] = Storage::url($path);
        } else {
            unset($validated['product_photo']); // Keep existing if not replaced
        }

        // Update product_photo2 if provided
        if ($request->hasFile('product_photo2')) {
            if ($product->product_photo2) {
                $oldPath2 = str_replace('/storage', 'public', $product->product_photo2);
                Storage::delete($oldPath2);
            }

            $path2 = $request->file('product_photo2')->store('product_photos', 'public');
            $validated['product_photo2'] = Storage::url($path2);
        } else {
            unset($validated['product_photo2']); // Keep existing if not replaced
        }

        $product->update($validated);

        \Log::info('Product updated successfully', $product->toArray());

        Alert::success('Updated!', 'Product updated successfully');
        return redirect()->route('manage_product');

    } catch (\Illuminate\Validation\ValidationException $e) {
        \Log::error('Validation failed during product update', ['errors' => $e->errors()]);
        return back()->withErrors($e->errors());

    } catch (\Exception $e) {
        \Log::error('Product update failed', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);

        Alert::error('Error', 'Failed to update product: ' . $e->getMessage());
        return back();
    }
}

    public function addToCart(Request $request)
{
    $productId = $request->input('product_id');
    $product = products::findOrFail($productId);

    $cart = session()->get('cart', []);

    if (isset($cart[$productId])) {
        $cart[$productId]['quantity']++;
    } else {
        $cart[$productId] = [
            'name' => $product->product_title,
            'price' => $product->product_newprice,
            'quantity' => 1,
            'photo' => $product->product_photo,
        ];
    }

    session()->put('cart', $cart);

    Alert::html(
            '<h5 style="color:black;">Added Successfully!</h5>',
          '<p style="color:black;">You have successfully Added this Product to Cart.</p>',
          'success'
      )->persistent();
      return redirect()->back();
}

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        Alert::html(
            '<h5 style="color:black;">Removed Successfully!</h5>',
            '<p style="color:black;">You have successfully Removed this Product from Cart.</p>',
            'success'
        )->persistent();
        return redirect()->back();
    }

}
