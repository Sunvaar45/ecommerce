<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
        ]);
    }

    public function getActiveCategories()
    {
        $categories = Categories::where('status', 1)->get();
        return $categories;
    }
}
