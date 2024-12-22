<?php

namespace App\Http\Controllers;

use App\Services\MarketService;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    protected $marketService;
    public function __construct(MarketService $marketService){
        $this->marketService = $marketService;
    }
    public function getMarkets($id){
        $markets = $this->marketService->getMarkets($id);
        if (isset($markets['message'])) {
            return response()->json($markets, 404);
        }
        return response()->json($markets, 200);
    }
}
