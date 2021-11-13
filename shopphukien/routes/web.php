<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', function () {
    return view('products');
});
Route::get('/product-details', function () {
    return view('product-detail');
});
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('admin', [Admin::class, 'index']);
Route::post('addsp', [Admin::class, 'addsp']);
