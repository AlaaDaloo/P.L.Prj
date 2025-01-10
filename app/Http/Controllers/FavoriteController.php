<?php

namespace App\Http\Controllers;
use App\Services\FavoriteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    protected $favoriteService;
    public function __construct(FavoriteService $favoriteService){
        $this->favoriteService = $favoriteService;
    }

    public function addFavorite(Request $request, $productId)
    {
        $userId = Auth::id();
        $favorite = $this->favoriteService->addFavorite($userId, $productId);
        return response()->json([
            'message' => 'Product added to favorites successfully',
            'favorite' => $favorite,
            ]);
    }

    public function removeFavorite($productId)
    {
        $userId = Auth::id();
        $this->favoriteService->removeFavorite($userId, $productId);
        return response()->json([
            'message' => 'Product removed from favorites successfully',
            ]);
    }



    public function getFavoriteProducts(){

        $user_id = Auth::id();
        $favoriteProducts = $this->favoriteService->getFavoriteProducts($user_id);
        if (isset($favoriteProducts['message'])) {
            return response()->json($favoriteProducts, 404);
        }
        return response()->json($favoriteProducts, 200);
    }
    public function getFavoritingUsers($id){
        $favoritingUsers = $this->favoriteService->getFavoringUsers($id);
        if (isset($favoritingUsers['message'])) {
            return response()->json($favoritingUsers, 404);
        }
        return response()->json($favoritingUsers, 200);
    }
    public function getAllFavorite(){
        $allFavorite = $this->favoriteService->getAllFavorite();
        if (isset($favoriteProducts['message'])) {
            return response()->json($allFavorite, 404);
        }
        return response()->json($allFavorite, 200);
    }
}
