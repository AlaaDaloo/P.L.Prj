<?php

namespace App\Services;

use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;


class FavoriteService
{
    public function getFavoriteProducts($user_id)
    {
        $user = User::find($user_id)->favoriteProducts;

        if ($user->isEmpty()) {
            return ['message' => 'no favorite products'];
        }
        return $user;
    }

    public function getFavoringUsers($product_id)
    {
        $product = Product::find($product_id)->usersFavorite;

        if($product->isEmpty()){
            return ['message' => 'no users favorite this product'];
        }
        return $product;
    }
    public function getAllFavorite(){
        $favorite = Favorite::all();

        if ($favorite->isEmpty()) {
            return ['message' => 'no favorite products'];
        }
        return $favorite;
    }


}
