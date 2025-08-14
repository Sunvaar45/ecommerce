<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/* home routes */
Route::get('/', [HomeController::class, 'index']);