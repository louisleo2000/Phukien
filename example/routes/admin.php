<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminProductTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.layouts.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/admin-product', [AdminProductController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-product');
Route::get('/del-product/{id}', [AdminProductController::class, 'del'])->middleware(['auth', 'admin'])->name('admin-product.del');
Route::get('/show-product/{id}', [AdminProductController::class, 'showData'])->middleware(['auth', 'admin'])->name('admin-product.show');


Route::get('/admin-product-type', [AdminProductTypeController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-product-type');
Route::get('/del-product-type/{id}', [AdminProductTypeController::class, 'del'])->middleware(['auth', 'admin'])->name('admin-product-type.del');
Route::get('/show-product-type/{id}', [AdminProductTypeController::class, 'showData'])->middleware(['auth', 'admin'])->name('admin-product-type.show');

Route::get('/admin-categories', [AdminCategoryController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-categories');
Route::get('/del-categories/{id}', [AdminCategoryController::class, 'del'])->middleware(['auth', 'admin'])->name('admin-categories.del');
Route::get('/show-categories/{id}', [AdminCategoryController::class, 'showData'])->middleware(['auth', 'admin'])->name('admin-categories.show');

Route::post('/admin-product/add', [AdminProductController::class, 'add'])->middleware(['auth', 'admin']);
Route::post('/edit-product/{id}', [AdminProductController::class, 'edit'])->middleware(['auth', 'admin']);

Route::post('/admin-product-type/add', [AdminProductTypeController::class, 'add'])->middleware(['auth', 'admin']);
Route::post('/edit-product-type/{id}', [AdminProductTypeController::class, 'edit'])->middleware(['auth', 'admin']);

Route::post('admin-categories/add', [AdminCategoryController::class, 'add'])->middleware(['auth', 'admin']);
Route::post('/edit-categories/{id}', [AdminCategoryController::class, 'edit'])->middleware(['auth', 'admin']);
