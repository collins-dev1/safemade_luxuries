<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = products::orderBy('created_at', 'desc')->limit(6)->get();
        return view('home', compact('products'));
    }

    public function redirect(){
        $userType = Auth::user()->usertype;
        $banStatus = Auth::user()->banned_status;
        $products = products::orderBy('created_at', 'desc')->limit(6)->get();
        if($userType == 0 && $banStatus == 0){
            return view('index', compact('products'));
        }
        elseif($userType == 1 && $banStatus == 0){
            return view('admin.dashboard');
        }
        else{
            return view('auth.login');
        }
    }
}
