<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//FrontEnd
Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);

Route::get('/product-details', function () {
    return view('pages.product-detail');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/about', function () {
    return view('pages.gioithieu');
});

//BackEnd
Route::get('admin', [Admin::class, 'index']);
Route::get('logout', [Admin::class, 'logOut']);
Route::get('addproduct', [Admin::class, 'viewAddProduct']);
Route::get('addproduct-type', [Admin::class, 'viewAddProductType']);


Route::post('dashboard', [Admin::class, 'showDashBoard']);
Route::post('addsp', [Admin::class, 'addsp']);
Route::post('addlsp', [Admin::class, 'addlsp']);
