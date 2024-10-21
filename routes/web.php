<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman index
Route::get('/', function () {
    return view('index');
});

// Route untuk halaman about
Route::get('/about', function () {
    return view('about');
});

// Route untuk halaman contact
Route::get('/contact', function () {
    return view('contact');
});

// Route untuk halaman product
Route::get('/product', function () {
    return view('product');
});
