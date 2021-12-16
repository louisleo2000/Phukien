<?php

use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->middleware(['auth'])->name('checkout');

Route::get('/about', function () {
    return view('pages.gioithieu');
})->name('about');

Route::get('/product-details/{product_id}', [ProductController::class, 'details'])->name('product-details');

Route::get('/products', [ProductController::class, 'index'])->name('product-details');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
