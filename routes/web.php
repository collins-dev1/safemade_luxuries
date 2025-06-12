<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/shops', function(){
    return view('shops');
})->name('shops');

Route::get('/aboutus', function(){
    return view('aboutus');
})->name('aboutus');

Route::get('/contactus', function(){
    return view('contactus');
})->name('contactus');

Route::get('/faq', function(){
    return view('faq');
})->name('faq');

Route::get('/comingsoon', function(){
    return view('comingsoon');
})->name('comingsoon');

Route::get('blog', function(){
    return view('blog');
})->name('blog');

Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirect'])->name('home');

Route::middleware([AdminMiddleware::class])->group(function (){
    Route::get('all_users', [AdminController::class, 'all_users'])->name('all_users');
    Route::get('/ban_user/{id}', [AdminController::class, 'ban_user'])->name('ban_user');
    Route::get('/unban_user/{id}', [AdminController::class, 'unban_user'])->name('unban_user');
    Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');
    Route::get('/add_product', [AdminController::class, 'add_product'])->name('add_product');
});

Route::middleware([UserMiddleware::class])->group(function(){

});
