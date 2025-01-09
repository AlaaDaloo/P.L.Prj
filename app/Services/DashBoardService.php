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

    public function createProducts(array $data)
    {
        return Product::create($data);
    }

}
