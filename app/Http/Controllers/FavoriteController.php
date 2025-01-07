<?php

namespace App\Http\Controllers;
use App\Services\FavoriteService;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    protected $favoriteService;
    public function __construct(FavoriteService $favoriteService){
        $this->favoriteService = $favoriteService;
    }
    public function getFavoriteProducts($id){
        $favoriteProducts = $this->favoriteService->getFavoriteProducts($id);
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
