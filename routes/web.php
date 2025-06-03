<?php

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
