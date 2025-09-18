<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/about', function () {
    return view('about');
})->name('about');
