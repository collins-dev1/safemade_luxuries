<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
}
