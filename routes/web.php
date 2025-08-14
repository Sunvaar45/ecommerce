<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/* home routes */
Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{id}', [ProductsController::class, 'getCategoryById'])->name('category.show');