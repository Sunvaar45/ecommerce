<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = $this->getActiveCategories();
        return view('index', [
            'categories' => $categories,
        ]);
    }

    public function getActiveCategories()
    {
        $categories = Categories::where('active_status', 1)->get();
        return $categories;
    }
}
