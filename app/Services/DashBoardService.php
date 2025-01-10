<?php

namespace App\Services;

use App\Models\Market;
use App\Models\Product;

class DashBoardService
{
    public function createMarkets(array $data)
    {
        return Market::create($data);
    }
    public function uploadMarketPicture($market, $file)
    {
        $path = $file->store('markets' , 'public');
        $market->photo = asset("storage/" . $path);
        $market->save();

        return $market->photo;
    }

    public function createProducts(array $data)
    {
        return Product::create($data);
    }

    public function uploadProductPicture($product, $file)
    {
        $path = $file->store('products' , 'public');
        $product->photo = asset("storage/" . $path);
        $product->save();

        return $product->photo;
    }

}
