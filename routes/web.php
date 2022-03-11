<?php

use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salesdashboard', [SalesController::class, 'dashboard'])->name('dashboard');
Route::get('/orders', [SalesController::class, 'order_view'])->name('orders');
Route::get('/products', [SalesController::class, 'product_view'])->name('products');
Route::get('/add/product', [SalesController::class, 'product_submit'])->name('product.submit');
Route::post('/add/product', [SalesController::class, 'product_add'])->name('product.add');
