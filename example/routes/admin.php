<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminProductTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.layouts.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/admin-product', [AdminProductController::class, 'viewAddProduct'])->middleware(['auth', 'admin'])->name('admin-product');

Route::get('/admin-product-type', [AdminProductTypeController::class, 'viewAddProductType'])->middleware(['auth', 'admin'])->name('admin-product-type');

Route::get('/admin-categories', [AdminCategoryController::class, 'viewAddCategory'])->middleware(['auth', 'admin'])->name('admin-categories');

Route::post('/admin-product/add', [AdminProductTController::class, 'addProduct'])->middleware(['auth', 'admin']);

Route::post('/admin-product-type/add', [AdminProductTypeController::class, 'addProductType'])->middleware(['auth', 'admin']);

Route::post('admin-categories/add', [AdminCategoryController::class, 'addCategory'])->middleware(['auth', 'admin']);
