<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group( function () {
Route::get('/', [ShopController::class, 'home'])->name('home');

Route::get('/home', [ShopController::class, 'index'])->name('shop');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('admin-product', [AdminController::class, 'adminProduct'])->name('adminProductPage');

    Route::get('dashboard/create', [AdminController::class, 'addProductView'])->name('addProductPage');
    Route::post('dashboard/create', [AdminController::class, 'storeProduct'])->name('addProduct');
    Route::get('dashboard/{product}', [AdminController::class, 'editProductView'])->name('editProductPage');
    Route::patch('dashboard/{product}', [AdminController::class, 'updateProduct'])->name('updateProduct');
    Route::delete('dashboard/product/delete/{product}', [AdminController::class, 'deleteProduct'])->name('deleteProduct');

    Route::get('admin-profile', [AdminController::class, 'adminProfile'])->name('adminProfilePage');
    Route::get('dashboard/user/list', [AdminController::class, 'allUsersView'])->name('allUsersPage');
    Route::patch('admin/role/{user}', [AdminController::class, 'roleUpdate'])->name('updateRole');
    Route::delete('admin/user/delete/{user}', [AdminController::class, 'deleteUser'])->name('deleteUser');

    Route::get('admin-orders', [AdminController::class, 'adminOrdersView'])->name('adminOrdersPage');
    Route::get('admin-order/details/{order}', [AdminController::class, 'adminOrderDetailsView'])->name('adminOrderDetailsPage');
    Route::patch('admin-order/update/{order}', [AdminController::class, 'adminOrderUpdate'])->name('adminOrderUpdate');
    //products

    //catgoties
    //    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    //    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    //    Route::post('/categories', [CategoryController::class,'store'])->name('categories.store');
    //    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    //    Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    //    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    //    //products
    //    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    //    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/order', [OrderController::class, 'create'])->name('order.create');







require __DIR__ . '/auth.php';
