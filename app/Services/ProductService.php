<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Market;
use App\Models\Product;

class ProductService{
    public function getProducts($id){
        $products= Market::find($id)->products;
        if($products->isEmpty()){
            return ['message' => 'No products found!'];
        }
        return $products;
    }
    public function getProductDetails($id){
        $product = Product::find($id);

        if(!$product){
            return ['message' => 'No products found!'];
        }

        return $product;
    }

    public function search(string $query)
    {
        $products = Product::where('name', 'LIKE', "%$query%")->get();
        $markets = Market::where('name', 'LIKE', "%$query%")->get();

        return [
            'products' => $products,
            'markets' => $markets,
        ];
    }
}
