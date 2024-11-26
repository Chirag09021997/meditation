<?php

use App\Http\Controllers\Api\APIController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\RecentController;
use App\Http\Controllers\Api\TrackingController;
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
Route::post('track-meditation', [TrackingController::class, 'trackMeditation']);
Route::post('user-available', [APIController::class, 'userAvailable']);
Route::post('delete-customer', [APIController::class, 'CustomerDelete']);
Route::post('track-report', [TrackingController::class, "reportMeditation"]);
Route::post('apply-coupon', [APIController::class, "applyCoupon"]);
Route::post('recent', [RecentController::class, 'store']);
Route::post('get-recent', [RecentController::class, 'getRecent']);
Route::post('user-categories/{customerId}', [TrackingController::class, 'getUserCategoryList']);
Route::get('notifications', [APIController::class, 'NotificationsList']);
