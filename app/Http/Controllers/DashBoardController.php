<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Product;
use App\Models\User;
use App\Services\DashBoardService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function uploadMarketPicture(Request $request , $market_id)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $market = Market::findOrFail($market_id);
        $marketPicture = $this->dashboardService->uploadMarketPicture($market, $request->file('market_picture'));

        return response()->json(['message' => 'Market picture uploaded successfully', 'market_picture' => $marketPicture]);
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

    public function uploadProductPicture(Request $request , $product_id)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ],422);
        }

        $product = Product::findOrFail($product_id);
        $productPicture = $this->dashboardService->uploadProductPicture($product, $request->file('product_picture'));

        return response()->json(['message' => 'Product picture uploaded successfully', 'product_picture' => $productPicture]);
    }
}
