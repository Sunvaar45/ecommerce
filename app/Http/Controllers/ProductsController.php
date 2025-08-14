<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts($categoryId)
    {
        $category = $this->getCategoryById($categoryId);
        $products = $this->getProductsByCategory($categoryId);
        return view('category_products', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function getCategoryById($id)
    {
        $category = Categories::find($id);
        return $category;
    }

    public function getProductsByCategory($categoryId)
    {
        $products = Products::where('category_id', $categoryId)
            ->where('status', 1)
            ->get();
        return $products;
    }
}