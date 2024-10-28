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
use App\Models\TrackMeditation;
use App\Models\WorkShop;
use Carbon\Carbon;
use Faker\Provider\Medical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $id = $request->input('id', 0);
        if ($id > 0) {
            MeditationAudio::where('id', $id)->increment('total_view', 1);
            $meditationAudio =  MeditationAudio::with('premiumPlans:id,name')->select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->find($id);
            return $this->sendResponse($meditationAudio, "Get Meditation Audio Record SuccessFully.");
        }
        $meditationAudio = MeditationAudio::with('premiumPlans:id,name')->select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($meditationAudio, "Get Meditation Audio List SuccessFully.");
    }

    public function MusicList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $id = $request->input('id', 0);
        if ($id > 0) {
            Music::where('id', $id)->increment('total_view', 1);
            $music =  Music::select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->find($id);
            return $this->sendResponse($music, "Get Music Record SuccessFully.");
        }
        $music = Music::select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($music, "Get Music List SuccessFully.");
    }

    public function WorkShopList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $id = $request->input('id', 0);
        if ($id > 0) {
            WorkShop::where('id', $id)->increment('total_view', 1);
            $workShop =  WorkShop::select('id', 'name', 'short_description', 'description', 'thumb_image',  'video_url', 'premium_type', 'second', 'total_view')->where('status', 'Active')->find($id);
            return $this->sendResponse($workShop, "Get WorkShop Record SuccessFully.");
        }
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

    public function Home(Request $request)
    {
        $customerId = $request->get('customer_id', 0);
        $meditationType = MeditationType::select('id', 'name')->get();
        $meditationAudio = MeditationAudio::with('premiumPlans:id,name')->select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->latest()->take(5)->get();
        $music = Music::select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->latest()->take(5)->get();
        $workshop = WorkShop::select('id', 'name', 'short_description', 'description', 'thumb_image',  'video_url', 'premium_type', 'second', 'total_view')->where('status', 'Active')->latest()->take(5)->get();
        $myTracking = [
            "total_day" => Carbon::now()->daysInMonth,
            "progress_day" => 0,
            "listening_time" => 0,
            "total_time" => 0
        ];
        if ($customerId > 0) {
            $customer = TrackMeditation::where('customer_id', $customerId)->latest()->first();
            if ($customer) {
                $myTracking["listening_time"] = intval($customer->listening_time);
                $myTracking["total_time"] = intval($customer->total_time);
                $progressDays = TrackMeditation::where('customer_id', $customerId)
                    ->whereMonth('created_at', Carbon::now()->month)
                    ->whereYear('created_at', Carbon::now()->year)
                    ->select(DB::raw('DATE(created_at) as date')) // Select distinct dates
                    ->distinct() // Distinct dates
                    ->count();
                $myTracking["progress_day"] = $progressDays;
            }
        }
        return $this->sendResponse([
            'meditation_type' => $meditationType,
            'meditation_audio' => $meditationAudio,
            'music' => $music,
            'workshop' => $workshop,
            'my_tracking' => $myTracking,
        ], "Get Home List SuccessFully.");
    }

    public function customerUpdate(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        $rules =  [
            'name' => 'required|string|max:255',
            'country_name' => 'required|string|max:255',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max file size
            'business_category' => 'nullable|string|max:255',
            'dob' => 'required|date|before:today',
        ];
        if ($customer) {
            $rules['mobile_no'] =  [
                'nullable',
                'string',
                'max:15',
                Rule::unique('customers')->ignore($customer->id),
            ];
            $rules['email'] = [
                'required',
                'email',
                Rule::unique('customers')->ignore($customer->id),
            ];
        } else {
            $rules['email'] = 'required|email|unique:customers,email';
            $rules['mobile_no'] =  'nullable|string|max:15|unique:customers,mobile_no';
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 200);
        }
        $validatedData = $validator->validated();
        if ($request->hasFile('profile')) {
            if ($customer && $customer?->profile != null) {
                $basePath = str_replace(config('app.url') . '/storage', 'app/public', $customer->profile);
                $imagePath = storage_path($basePath);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('profile');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/customer', $fileName);
            $validatedData['profile'] = str_replace('public/', 'storage/', $filePath);
        }
        $customer = Customer::updateOrCreate(['email' => $request->email], $validatedData);
        return $this->sendResponse($customer, "Customer update successFully.");
    }
}
