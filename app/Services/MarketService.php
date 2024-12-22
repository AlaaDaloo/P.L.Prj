<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Market;

class MarketService{
    public function getMarkets($id){
        $markets= Category::find($id)->markets;
        if($markets->isEmpty()){
            return ['message' => 'No markets found!'];
        }
            return $markets;
    }
}
