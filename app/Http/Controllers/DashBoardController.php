<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\DashBoardService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    protected $dashboardService;

    public function __construct(DashBoardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }
    public function createMarkets(Request $request)
    {
        $user_id = Auth::id();
        $userRole = User::where('id',$user_id)->value('role');
        if ($userRole != 'admin') {
            return response()->json([
                'message' => 'You do not have permission to access this page'
            ],403
            );
        }
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

        $user_id = Auth::id();
        $userRole = User::where('id',$user_id)->value('role');
        if ($userRole != 'admin') {
            return response()->json([
                'message' => 'You do not have permission to access this page'
            ],403
            );
        }

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
