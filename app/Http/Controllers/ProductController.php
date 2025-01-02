<?php

namespace App\Http\Controllers;

use App\Services\MarketService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService){
        $this->productService = $productService;
    }
    public  function getProducts($id){
        $products = $this->productService->getProducts($id);
        if (isset($products['message'])) {
            return response()->json($products, 404);
        }
        return response()->json($products, 200);
    }
    public function getProductDetails($id){
    $product = $this->productService->getProductDetails($id);
    return response()->json($product, 200);
    }
}
