<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Models\products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = products::orderBy('created_at', 'desc')->limit(6)->get();
    return view('index', compact('products'));
});

Route::get('/shops', function(){
    $products = products::all();
    return view('shops', compact('products'));
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
Route::post('/cart/add', [AdminController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [AdminController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/remove/{id}', [AdminController::class, 'remove'])->name('cart.remove');
Route::post('/cart_update/{id}', [AdminController::class, 'update'])->name('cart_update');

Route::middleware([AdminMiddleware::class])->group(function (){
    Route::get('all_users', [AdminController::class, 'all_users'])->name('all_users');
    Route::get('/ban_user/{id}', [AdminController::class, 'ban_user'])->name('ban_user');
    Route::get('/unban_user/{id}', [AdminController::class, 'unban_user'])->name('unban_user');
    Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');
    Route::get('/add_product', [AdminController::class, 'add_product'])->name('add_product');
    Route::post('/create_product', [AdminController::class, 'create_product'])->name('create_product');
    Route::get('/manage_product', [AdminController::class, 'manage_product'])->name('manage_product');
    Route::get('/delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');
    Route::get('/edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');
    Route::post('/product/update/{id}', [AdminController::class, 'edit_a_product'])->name('product.update');
    Route::get('/add_blog', [AdminController::class, 'add_blog'])->name('add_blog');
    Route::get('/manage_blog', [AdminController::class, 'manage_blog'])->name('manage_blog');
    Route::post('/add_a_blog', [AdminController::class, 'add_a_blog'])->name('add_a_blog');

});

Route::middleware([UserMiddleware::class])->group(function(){

});
