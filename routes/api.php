<?php

use App\Http\Controllers\Api\APIController;
use App\Http\Controllers\Api\FavoriteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('customers', [APIController::class, 'CustomerList']);
Route::get('premium-plans', [APIController::class, 'PremiumPlansList']);
Route::get('meditation-type', [APIController::class, 'MeditationTypeList']);
Route::get('meditation-audio', [APIController::class, 'MeditationAudioList']);
Route::get('music', [APIController::class, 'MusicList']);
Route::get('workshop', [APIController::class, 'WorkShopList']);
Route::get('blogs', [APIController::class, 'BlogList']);
Route::get('coupon-system', [APIController::class, 'CouponSystemList']);
Route::get('events', [APIController::class, 'EventList']);
Route::get('stores', [APIController::class, 'StoreList']);
Route::get('home', [APIController::class, 'Home']);
Route::post('customer', [APIController::class, 'customerUpdate']);
Route::post('favorite', [FavoriteController::class, 'store']);
Route::post('get-favorite', [FavoriteController::class, 'getFavorite']);
