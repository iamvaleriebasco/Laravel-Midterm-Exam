<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

// Home + About
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
    
})->name('about');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
