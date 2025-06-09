<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function redirect(){
        $userType = Auth::user()->usertype;
        $banStatus = Auth::user()->banned_status;
        if($userType == 0 && $banStatus == 0){
            return view('index');
        }
        elseif($userType == 1 && $banStatus == 0){
            return view('admin.dashboard');
        }
        else{
            return view('auth.login');
        }
    }
}
