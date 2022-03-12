<?php

use App\Http\Controllers\SalesController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salesdashboard', [SalesController::class, 'dashboard'])->name('dashboard');
Route::get('/orders', [SalesController::class, 'order_view'])->name('orders');
Route::get('/products', [SalesController::class, 'product_view'])->name('products');
Route::get('/add/product', [SalesController::class, 'product_submit'])->name('product.submit');
Route::post('/add/products', [SalesController::class, 'product_add'])->name('product.add');




//admin logi
Route::get('/admin/login', [AdminController::class, 'login'])->name('adminLogin');
Route::post('/admin/loggedin', [AdminController::class, 'loginSubmit'])->name('admin_Login');
//admin profile


Route::get('/adminProfile', [AdminController::class, 'adminProfile'])->name('adminProfile');
//Route::view('/adminProfile', '\admin\adminProfile')->name('adminProfile');

//admin logout
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

//admin view buyer
//Route::get('/view/buyer', AdminController::class,'viewBuyer')->name('viewBuyer');
Route::view('/view/buyer', 'admin\viewBuyer')->name('viewBuyer');








//view seller
Route::view('/view/seller', 'admin\viewSeller')->name('viewSeller');

//view products
Route::view('view/products', 'admin\viewProducts')->name('viewProducts');
