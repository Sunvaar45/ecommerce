<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = $this->getCategories();
        return view('index', [
            'categories' => $categories,
        ]);
    }

    public function getCategories()
    {
        $categories = Categories::all();
        return $categories;
    }
}
