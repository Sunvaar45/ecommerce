<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ProductImages;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProductsByCategory($categoryId)
    {
        $chosenCategory = $this->getCategoryById($categoryId);
        $products = $this->getProductsByCategory($categoryId);

        return view('category_products', [
            'chosenCategory' => $chosenCategory,
            'products' => $products,
        ]);
    }

    public function getCategoryById($id)
    {
        $chosenCategory = Categories::find($id);
        return $chosenCategory;
    }

    public function getProductsByCategory($categoryId)
    {
        $products = Products::where('category_id', $categoryId)
            ->where('status', 1)
            ->with('mainImage')
            ->get();
        return $products;
    }
}