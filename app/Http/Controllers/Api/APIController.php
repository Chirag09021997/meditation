<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CouponSystem;
use App\Models\Customer;
use App\Models\Event;
use App\Models\MeditationAudio;
use App\Models\MeditationType;
use App\Models\Music;
use App\Models\PremiumPlan;
use App\Models\Store;
use App\Models\WorkShop;
use Faker\Provider\Medical;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function CustomerList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $customers = Customer::select('id', 'name', 'profile', 'country_name', 'mobile_no', 'email', 'business_category', 'dob')->simplePaginate($perPage);
        return $this->sendResponse($customers, "Get Customer List SuccessFully.");
    }

    public function PremiumPlansList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $premiumPlan = PremiumPlan::select('id', 'name', 'short_description', 'description', 'total_amount', 'discount', 'total_user', 'total_payable_amount', 'thumb_upload')
            ->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($premiumPlan, "Get Premium Plan List SuccessFully.");
    }

    public function MeditationTypeList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $meditationType = MeditationType::select('id', 'name', 'short_description', 'description', 'thumb_image')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($meditationType, "Get Meditation Type List SuccessFully.");
    }

    public function MeditationAudioList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $meditationAudio = MeditationAudio::with('premiumPlans:id,name')->select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($meditationAudio, "Get Meditation Audio List SuccessFully.");
    }

    public function MusicList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $music = Music::select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($music, "Get Music List SuccessFully.");
    }

    public function WorkShopList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $workShop = WorkShop::select('id', 'name', 'short_description', 'description', 'thumb_image',  'video_url', 'premium_type', 'second', 'total_view')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($workShop, "Get WorkShop List SuccessFully.");
    }

    public function BlogList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $blog = Blog::select('id', 'name', 'short_description', 'description', 'thumb_image', 'total_view')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($blog, "Get Blog List SuccessFully.");
    }

    public function CouponSystemList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $couponSystem = CouponSystem::select('id', 'type', 'coupon_code', 'value', 'start_date', 'end_date')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($couponSystem, "Get CouponSystem List SuccessFully.");
    }

    public function EventList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $event = Event::select('id', 'name', 'thumb_image', 'short_description', 'description', 'starting_date', 'location', 'is_paid', 'fees')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($event, "Get Event List SuccessFully.");
    }

    public function StoreList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $store = Store::with('productPhotos:id,store_id,url')->select('id', 'product_name', 'short_description', 'description', 'product_thumb', 'video_preview', 'price', 'total_stock', 'total_sale', 'discount', 'tags')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($store, "Get Store List SuccessFully.");
    }

    public function Home()
    {
        $meditationType = MeditationType::select('id', 'name')->get();
        $meditationAudio = MeditationAudio::with('premiumPlans:id,name')->select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->latest()->take(5)->get();
        $music = Music::select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->latest()->take(5)->get();
        $workshop = WorkShop::select('id', 'name', 'short_description', 'description', 'thumb_image',  'video_url', 'premium_type', 'second', 'total_view')->where('status', 'Active')->latest()->take(5)->get();
        return $this->sendResponse([
            'meditation_type' => $meditationType,
            'meditation_audio' => $meditationAudio,
            'music' => $music,
            'workshop' => $workshop,
        ], "Get Home List SuccessFully.");
    }
}
