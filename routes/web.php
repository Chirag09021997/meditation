<?php

use App\Http\Controllers\Front\GoogleController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\OrderController as FrontOrderController;
use App\Http\Controllers\Front\ProfileController as FrontProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\BusinessController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\CouponSystemController;
use App\Http\Controllers\Web\CustomerController;
use App\Http\Controllers\Web\EventController;
use App\Http\Controllers\Web\MeditationAudioController;
use App\Http\Controllers\Web\MeditationTypeController;
use App\Http\Controllers\Web\MusicController;
use App\Http\Controllers\Web\NotificationController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\PremiumPlanController;
use App\Http\Controllers\Web\StoreController;
use App\Http\Controllers\Web\WorkShopController;
use Illuminate\Support\Facades\Auth;
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

// fronted routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/events', [HomeController::class, 'eventsList'])->name('events');
Route::get('/events/{id}', [HomeController::class, 'eventSingle'])->name('events.single');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blogs', [HomeController::class, 'blogsList'])->name('blogs');
Route::get('/blogs/{id}', [HomeController::class, 'blogSingle'])->name('blogs.single');
Route::get('/stores', [HomeController::class, 'storeList'])->name('stores');
Route::get('/stores/{id}', [HomeController::class, 'storeSingle'])->name('stores.single');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/contact', [HomeController::class, 'contactStore'])->name('contact.store');
Route::get('/term-condition', [HomeController::class, 'termCondition'])->name('term.condition');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/refund-policy', [HomeController::class, 'refundPolicy'])->name('refund.policy');
Route::get('/login', [HomeController::class, 'login'])->name('user.login');

Route::post('/user/logout', function () {
    Auth::guard('customer')->logout();
    return redirect()->route('home');
})->name('user.logout');

Route::controller(GoogleController::class)->group(function () {
    Route::get('/auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::middleware('customer')->group(function () {
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [HomeController::class, 'checkoutStore'])->name('checkout.store');
    Route::get('/user-profile', [FrontProfileController::class, 'index'])->name('user.profile');
    Route::post('/user-profile', [FrontProfileController::class, 'update'])->name('user.profile.update');
    Route::get('/user-orders', [FrontOrderController::class, 'index'])->name('user.orders');
    Route::get('/user-order-show/{id}', [FrontOrderController::class, 'show'])->name('user.order.show');
    Route::get('/user-order-edit/{id}', [FrontOrderController::class, 'edit'])->name('user.order.edit');
    Route::post('/user-order-update/{id}', [FrontOrderController::class, 'update'])->name('user.order.update');
    Route::post('/user-order-cancel', [FrontOrderController::class, 'cancelOrder'])->name('user.order.cancel');
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

    Route::get('contact-us/data', [ContactUsController::class, 'getData'])->name('contact-us.data');
    Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact-us.index');
    Route::get('contact-us/{id}', [ContactUsController::class, 'show'])->name('contact-us.show');
    Route::delete('contact-us/{id}', [ContactUsController::class, 'destroy'])->name('contact-us.destroy');

    Route::get('order/data', [OrderController::class, 'getData'])->name('order.data');
    Route::post('order-status', [OrderController::class, 'statusUpdate'])->name('order.status');
    Route::resource('order', OrderController::class)->except(['create', 'store']);

    Route::get('business/data', [BusinessController::class, 'getData'])->name('business.data');
    Route::post('business/status/{business}', [BusinessController::class, 'changeStatus'])->name('business.changeStatus');
    Route::resource('business', BusinessController::class);

    Route::get('notification/data', [NotificationController::class, 'getData'])->name('notification.data');
    Route::post('notification/status/{notification}', [NotificationController::class, 'changeStatus'])->name('notification.changeStatus');
    Route::resource('notification', NotificationController::class);
});

require __DIR__ . '/auth.php';
