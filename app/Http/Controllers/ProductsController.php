<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getCategoryById($id)
    {
        $category = Categories::find($id);
    }
}