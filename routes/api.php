<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function(){
    Route::get('logout' , [AuthController::class , 'logout']);
    Route::get('/profile', [ProfileController::class, 'getProfile']);
    Route::put('/profile', [ProfileController::class, 'updateProfile']);
    Route::put('/profile/password', [ProfileController::class, 'updatePassword']);
    Route::post('/profile/picture', [ProfileController::class, 'uploadProfilePicture']);

    Route::get('/getFavoriteProducts' , [FavoriteController::class, 'getFavoriteProducts']);
    Route::get('/getAllFavorite' , [FavoriteController::class, 'getAllFavorite']);
    Route::get('/getFavoringUsers/{id}' , [FavoriteController::class, 'getFavoritingUsers']);
    Route::post('/addFavorite/{productId}', [FavoriteController::class, 'addFavorite']);
    Route::delete('/removeFavorite/{productId}', [FavoriteController::class, 'removeFavorite']);

    Route::post('/create_order', [OrderController::class, 'createOrdre']);
    Route::put('/update_order/{id}', [OrderController::class, 'updateOrdre']);
    Route::delete('/delete_order/{id}', [OrderController::class, 'deleteOrdre']);
    Route::get('/getUserOrders', [OrderController::class, 'getUserOrders']);

    Route::post('/createMarkets' , [DashBoardController::class , 'createMarkets']);
    Route::post('/createProducts' , [DashBoardController::class , 'createProducts']);
    Route::post('/dashboard/market/picture/{id}', [DashBoardController::class , 'uploadMarketPicture']);
    Route::post('/dashboard/product/picture/{id}', [DashBoardController::class , 'uploadProductPicture']);
});
Route::post('/register' , [AuthController::class , 'register']);
Route::post('/login' , [AuthController::class , 'login']);
Route::get('/getCategories' , [CategoryController::class , 'getCategories']);
Route::get('/getMarkets/{id}' , [MarketController::class, 'getMarkets']);
Route::get('/getProducts/{id}' , [ProductController::class, 'getProducts']);
Route::get('/getProductDetails/{id}' , [ProductController::class, 'getProductDetails']);
Route::get('/search', [ProductController::class, 'search']);


