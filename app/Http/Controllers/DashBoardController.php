<?php

namespace App\Http\Controllers;

use App\Services\DashBoardService;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    protected $dashboardService;

    public function __construct(DashBoardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }
    public function createMarkets(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|string',
            'location' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
            ]);

        $market = $this->dashboardService->createMarkets($validated);

        return response()->json([
            'message' => 'Market created successfully',
            'market' => $market
        ],201
        );
    }

    public function createProducts(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'count' => 'required|integer',
            'available' => 'required|boolean',
            'market_id' => 'required|exists:markets,id'
        ]);

        $product =$this->dashboardService->createProducts($validated);
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ], 201
        );
    }
}
