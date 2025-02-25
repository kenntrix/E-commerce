<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group( function () {
Route::get('/', [ShopController::class, 'index'])->name('shop');


Route::get('/catalogue', [ShopController::class, 'home'])->name('catalogue')->middleware('role:admin');

Route::middleware(['auth', 'role:admin'])->group(function() {
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/order', [OrderController::class, 'create'])->name('order.create');







require __DIR__ . '/auth.php';
