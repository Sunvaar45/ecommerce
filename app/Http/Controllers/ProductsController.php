<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getCategoryById($id)
    {
        $category = Categories::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        // return response()->json($category);
        return view('category_products', [
            'category' => $category,
            'products' => $this->getProductsByCategory($category->id)
        ]);
    }

    public function getProductsByCategory($categoryId)
    {
        $products = Products::where('category_id', $categoryId)
            ->where('status', 1)
            ->get();
            
        return $products;
    }
}