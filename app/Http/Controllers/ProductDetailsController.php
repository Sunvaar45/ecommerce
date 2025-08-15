<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function showProductDetails($productId)
    {
        $product = $this->getProductDetailsById($productId);
        $productCategory = $this->getCategoryByProduct($productId);
        return view('details', [
            'product' => $product,
            'productCategory' => $productCategory,
        ]);
    }

    public function getProductDetailsById($productId)
    {
        $product = Products::with('category')
            ->where('status', 1)
            ->find($productId);

        return $product;
    }

    public function getCategoryByProduct($productId)
    {
        $productCategory = Products::find($productId)->category;
        return $productCategory;
    }
}
