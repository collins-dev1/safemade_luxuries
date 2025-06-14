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
    // dd($request->all());
    \Log::info('Form submission attempt', $request->all());

    try {
        $validated = $request->validate([
            'product_title' => 'required|string|max:255',
            'product_description' => 'required|string',
            'product_oldprice' => 'required|numeric',
            'product_newprice' => 'required|numeric',
            'product_photo' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        // Debug: Check if file is valid
        if (!$request->file('product_photo')->isValid()) {
            throw new \Exception('Uploaded file is not valid');
        }

        // Ensure directory exists
        $storagePath = storage_path('app/public/product_photos');
        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true);
        }

        // Store file
        $path = $request->file('product_photo')->store('product_photos', 'public');

        // Create product
        $product = products::create([
            'product_title' => $validated['product_title'],
            'product_description' => $validated['product_description'],
            'product_oldprice' => $validated['product_oldprice'],
            'product_newprice' => $validated['product_newprice'],
            'product_photo' => Storage::url($path)
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

        Alert::error('Error', 'Failed to create product: '.$e->getMessage());
        return back();
    }
}
}
