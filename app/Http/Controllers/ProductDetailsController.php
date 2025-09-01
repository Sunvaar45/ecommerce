<?php

namespace App\Http\Controllers;

use App\Models\ProductImages;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function showProductDetails($productId)
    {
        $product = $this->getProductDetailsById($productId);
        $productImages = $this->getProductImagesByProductId($productId);

        $productCategory = $this->getCategoryByProduct($productId);
        $similarProducts = $this->getSimilarProductsByCategory($productCategory->id);

        return view('details', [
            'product' => $product,
            'productImages' => $productImages,
            
            'productCategory' => $productCategory,
            'similarProducts' => $similarProducts,
        ]);
    }

    public function getProductDetailsById($productId)
    {
        $product = Products::with('category')
            ->where('status', 1)
            ->find($productId);

        return $product;
    }
    public function getProductImagesByProductId($productId)
    {
        $productImages = ProductImages::with('product')
            ->where('status', 1)
            ->where('product_id', $productId)
            ->get();

        return $productImages;
    }

    public function getCategoryByProduct($productId)
    {
        $productCategory = Products::find($productId)->category;
        return $productCategory;
    }
    public function getSimilarProductsByCategory($categoryId)
    {
        $similarProducts = Products::where('category_id', $categoryId)
            ->where('status', 1)
            ->get();

        return $similarProducts;
    }
}
