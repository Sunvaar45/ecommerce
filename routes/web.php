<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/* home routes */
Route::get('/', [HomeController::class, 'index']);

/* product routes */
Route::get('/category/{id}', [ProductsController::class, 'showProductsByCategory'])
    ->name('category.show');