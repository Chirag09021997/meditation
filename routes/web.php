<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\CouponSystemController;
use App\Http\Controllers\Web\CustomerController;
use App\Http\Controllers\Web\EventController;
use App\Http\Controllers\Web\MeditationAudioController;
use App\Http\Controllers\Web\MeditationTypeController;
use App\Http\Controllers\Web\MusicController;
use App\Http\Controllers\Web\PremiumPlanController;
use App\Http\Controllers\Web\StoreController;
use App\Http\Controllers\Web\WorkShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/customers/data', [CustomerController::class, 'getData'])->name('customer.data');
    Route::resource('customer', CustomerController::class);

    Route::get('premium-plan/data', [PremiumPlanController::class, 'getData'])->name('premium-plan.data');
    Route::post('premium-plan/status/{premium_plan}', [PremiumPlanController::class, 'changeStatus'])->name('premium-plan.changeStatus');
    Route::resource('premium-plan', PremiumPlanController::class);

    Route::get('meditation-type/data', [MeditationTypeController::class, 'getData'])->name('meditation-type.data');
    Route::post('meditation-type/status/{meditation_type}', [MeditationTypeController::class, 'changeStatus'])->name('meditation-type.changeStatus');
    Route::resource('meditation-type', MeditationTypeController::class);

    Route::get('meditation-audio/data', [MeditationAudioController::class, 'getData'])->name('meditation-audio.data');
    Route::post('meditation-audio/status/{meditation_audio}', [MeditationAudioController::class, 'changeStatus'])->name('meditation-audio.changeStatus');
    Route::resource('meditation-audio', MeditationAudioController::class);

    Route::get('music/data', [MusicController::class, 'getData'])->name('music.data');
    Route::post('music/status/{music}', [MusicController::class, 'changeStatus'])->name('music.changeStatus');
    Route::resource('music', MusicController::class);

    Route::get('workshop/data', [WorkShopController::class, 'getData'])->name('workshop.data');
    Route::post('workshop/status/{workshop}', [WorkShopController::class, 'changeStatus'])->name('workshop.changeStatus');
    Route::resource('workshop', WorkShopController::class);

    Route::get('blog/data', [BlogController::class, 'getData'])->name('blog.data');
    Route::post('blog/status/{blog}', [BlogController::class, 'changeStatus'])->name('blog.changeStatus');
    Route::resource('blog', BlogController::class);

    Route::get('coupon-system/data', [CouponSystemController::class, 'getData'])->name('coupon-system.data');
    Route::post('coupon-system/status/{coupon_system}', [CouponSystemController::class, 'changeStatus'])->name('coupon-system.changeStatus');
    Route::resource('coupon-system', CouponSystemController::class);

    Route::get('event/data', [EventController::class, 'getData'])->name('event.data');
    Route::post('event/status/{event}', [EventController::class, 'changeStatus'])->name('event.changeStatus');
    Route::resource('event', EventController::class);

    Route::get('store/data', [StoreController::class, 'getData'])->name('store.data');
    Route::post('store/status/{store}', [StoreController::class, 'changeStatus'])->name('store.changeStatus');
    Route::delete('store/product-photo', [StoreController::class, 'deleteProductPhoto'])->name('store.productPhoto');
    Route::resource('store', StoreController::class);
});

require __DIR__ . '/auth.php';
