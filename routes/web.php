<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllproductsController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', function () {
    return view('product');
})->middleware(['auth', 'verified'])->name('product');

Route::get('/products/addproducts', [ProductController::class, 'add'])->name('products.addproducts');
Route::post('/products/addproducts', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/allproducts', [AllproductsController::class, 'index'])->name('products.allproducts');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/{id}', [ProductController::class, 'update'])->name('products.update');
require __DIR__.'/auth.php';
