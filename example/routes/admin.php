<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminProductTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.layouts.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/admin-product', [AdminProductController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-product');

Route::get('/admin-product-type', [AdminProductTypeController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-product-type');

Route::get('/admin-categories', [AdminCategoryController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-categories');

Route::post('/admin-product/add', [AdminProductController::class, 'add'])->middleware(['auth', 'admin']);

Route::post('/admin-product-type/add', [AdminProductTypeController::class, 'add'])->middleware(['auth', 'admin']);

Route::post('admin-categories/add', [AdminCategoryController::class, 'add'])->middleware(['auth', 'admin']);
