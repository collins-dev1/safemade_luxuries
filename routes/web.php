<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/shops', function(){
    return view('shops');
})->name('shops');
