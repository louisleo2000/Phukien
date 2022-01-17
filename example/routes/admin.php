<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminProductTypeController;
use App\Http\Controllers\Admin\UserManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.adminpages.admin-statistical');
})->middleware(['auth', 'admin'])->name('dashboard');
//ADMIN PRODUCTS
Route::get('/admin-product', [AdminProductController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-product');
Route::get('admin-product/list', [AdminProductController::class, 'get'])->name('admin-product.list');
Route::get('/del-product/{id}', [AdminProductController::class, 'del'])->middleware(['auth', 'admin'])->name('admin-product.del');
Route::get('/show-product/{id}', [AdminProductController::class, 'showData'])->middleware(['auth', 'admin'])->name('admin-product.show');

Route::post('/admin-product/add', [AdminProductController::class, 'add'])->middleware(['auth', 'admin']);
Route::post('/edit-product/{id}', [AdminProductController::class, 'edit'])->middleware(['auth', 'admin']);

//AMIN PRODUCTS TYPE
Route::get('/admin-product-type', [AdminProductTypeController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-product-type');
Route::get('admin-product-type/list', [AdminProductTypeController::class, 'get'])->name('admin-product-type.list');
Route::get('/del-product-type/{id}', [AdminProductTypeController::class, 'del'])->middleware(['auth', 'admin'])->name('admin-product-type.del');
Route::get('/show-product-type/{id}', [AdminProductTypeController::class, 'showData'])->middleware(['auth', 'admin'])->name('admin-product-type.show');

Route::post('/admin-product-type/add', [AdminProductTypeController::class, 'add'])->middleware(['auth', 'admin']);
Route::post('/edit-product-type/{id}', [AdminProductTypeController::class, 'edit'])->middleware(['auth', 'admin']);

//ADMIN CATEGORY
Route::get('/admin-categories', [AdminCategoryController::class, 'view'])->middleware(['auth', 'admin'])->name('admin-categories');
Route::get('admin-categories/list', [AdminCategoryController::class, 'get'])->name('admin-categories.list');
Route::get('/del-categories/{id}', [AdminCategoryController::class, 'del'])->middleware(['auth', 'admin'])->name('admin-categories.del');
Route::get('/show-categories/{id}', [AdminCategoryController::class, 'showData'])->middleware(['auth', 'admin'])->name('admin-categories.show');

Route::post('admin-categories/add', [AdminCategoryController::class, 'add'])->middleware(['auth', 'admin']);
Route::post('/edit-categories/{id}', [AdminCategoryController::class, 'edit'])->middleware(['auth', 'admin']);

//USER MANAGER
Route::get('/user-manager', [UserManagerController::class, 'view'])->middleware(['auth', 'admin'])->name('user-manager');
Route::get('user-manager/list', [UserManagerController::class, 'get'])->name('user-manager.list');
Route::get('/del-user/{id}', [UserManagerController::class, 'del'])->middleware(['auth', 'admin'])->name('user-manager.del');
Route::get('/show-user/{id}', [UserManagerController::class, 'showData'])->middleware(['auth', 'admin'])->name('user-manager.show');

Route::post('/user-manager/add', [UserManagerController::class, 'add'])->middleware(['auth', 'admin']);
Route::post('/edit-user/{id}', [UserManagerController::class, 'edit'])->middleware(['auth', 'admin']);





