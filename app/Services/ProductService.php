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
}
