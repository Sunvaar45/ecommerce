<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/* home routes */
Route::get('/', [HomeController::class, 'index'])->name('home');

/* auth routes */
Route::prefix('/')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.post');
});

/* product routes */
Route::get('/category/{id}', [ProductsController::class, 'showProductsByCategory'])
    ->name('category.show');

Route::get('/product/{id}', [ProductDetailsController::class, 'showProductDetails'])
    ->name('product.show');
