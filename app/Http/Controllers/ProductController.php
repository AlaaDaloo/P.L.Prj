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

    if (isset($categories['message'])) {
        return response()->json($product, 404);
    }

    return response()->json($product, 200);
    }

    public function search(Request $request)
    {
        $query = $request->get('query', '');

        $results = $this->productService->search($query);

        return response()->json($results);
    }
}
