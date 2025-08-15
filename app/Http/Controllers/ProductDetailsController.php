<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function showProductDetails()
    {
        $product = $this->getProductDetailsById(request()->id);
        return view('details', [
            'product' => $product,
        ]);
    }

    public function getProductDetailsById($id)
    {
        $product = Products::where('status', 1)->find($id)
            ->load('category');
            
        return $product;
    }

    public function getCategoryByProduct($productId)
    {
        $category = Products::find($productId)->category;
        return $category;
    }
}
