<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Business;
use App\Models\CouponSystem;
use App\Models\Customer;
use App\Models\CustomerPurchasePlan;
use App\Models\Event;
use App\Models\MeditationAudio;
use App\Models\MeditationType;
use App\Models\Interest;
use App\Models\Music;
use App\Models\Notification;
use App\Models\PremiumPlan;
use App\Models\Recent;
use App\Models\Store;
use App\Models\TrackMeditation;
use App\Models\WorkShop;
use App\Models\WorkshopCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class APIController extends Controller
{
    public function CustomerList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $customers = Customer::with('business:id,name')->select('id', 'name', 'profile', 'country_name', 'mobile_no', 'email', 'business_category', 'dob', 'business_id')->simplePaginate($perPage);
        return $this->sendResponse($customers, "Get Customer List SuccessFully.");
    }

    public function PremiumPlansList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $customerId = $request->input('customer_id', 0);
        if ($customerId == 0) {
            $premiumPlan = PremiumPlan::select('id', 'name', 'short_description', 'description', 'total_amount', 'discount', 'total_user', 'total_payable_amount', 'thumb_upload', 'is_free')
                ->where('status', 'Active')->simplePaginate($perPage);
        } else {
            $premiumPlanId = CustomerPurchasePlan::where('customer_id', $customerId)->pluck('premium_plan_id')->first();
            $premiumPlan = PremiumPlan::select('id', 'name', 'short_description', 'description', 'total_amount', 'discount', 'total_user', 'total_payable_amount', 'thumb_upload', 'is_free')
                ->selectRaw('CASE WHEN premium_plans.id = ? THEN 1 ELSE premium_plans.is_free END as is_free', [$premiumPlanId])
                ->where('status', 'Active')
                ->simplePaginate($perPage);
        }
        return $this->sendResponse($premiumPlan, "Get Premium Plan List SuccessFully.");
    }

    public function InterestList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $interest = Interest::select('id', 'name', 'thumb_image')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($interest, "Get Interest List SuccessFully.");
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
            $meditationAudio = MeditationAudio::with('premiumPlans:id,name')
                ->select('id', 'name', 'short_description', 'description', 'audio_thumb','inner_thumb', 'audio_upload', 'premium_type', 'total_view')
                ->where('status', 'Active')
                ->find($id);
            return $this->sendResponse($meditationAudio, "Get Meditation Audio Record Successfully.");
        }

        $customerId = $request->input('customer_id');
        $query = MeditationAudio::with('premiumPlans:id,name')
            ->select('meditation_audio.id', 'meditation_audio.name', 'meditation_audio.short_description', 'meditation_audio.description', 'meditation_audio.audio_thumb', 'meditation_audio.audio_upload', 'meditation_audio.premium_type', 'meditation_audio.total_view')
            ->where('meditation_audio.status', 'Active');

        if ($customerId) {
            $customer = Customer::with('interests:id', 'customerPurchasePlan:id')->find($customerId);
            if (!$customer) {
                return $this->sendError("Customer not found.", 404);
            }
            $interestIds = $customer->interests->pluck('id');
            $purchasePlanId = $customer->customerPurchasePlan->id ?? null;
            if ($interestIds->isNotEmpty()) {
                $query->join('meditation_audio_interest_type', 'meditation_audio.id', '=', 'meditation_audio_interest_type.meditation_audio_id')
                    ->join('meditation_audio_premium_plan', 'meditation_audio.id', '=', 'meditation_audio_premium_plan.meditation_audio_id')
                    ->orderByRaw("FIELD(meditation_audio_interest_type.interest_id, " . implode(',', $interestIds->toArray()) . ") DESC");
            }
            if ($purchasePlanId) {
                if (!$interestIds->isNotEmpty()) {
                    $query->join('meditation_audio_premium_plan', 'meditation_audio.id', '=', 'meditation_audio_premium_plan.meditation_audio_id');
                }
                $query->orderByRaw(
                    "CASE WHEN meditation_audio_premium_plan.premium_plan_id = $purchasePlanId THEN 1 ELSE 0 END DESC"
                );
            }
        } else {
            $query->orderBy('total_view', 'desc');
        }
        $meditationAudio = $query->simplePaginate($perPage);
        return $this->sendResponse($meditationAudio, "Get Meditation Audio List SuccessFully.");
    }

    public function MusicList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $id = $request->input('id', 0);
        if ($id > 0) {
            Music::where('id', $id)->increment('total_view', 1);
            $music =  Music::select('id', 'name', 'short_description', 'description', 'audio_thumb','inner_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->find($id);
            return $this->sendResponse($music, "Get Music Record SuccessFully.");
        }
        $customerId = $request->input('customer_id');
        $query = Music::select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view')
            ->where('status', 'Active');
        if ($customerId) {
            $customer = Customer::with('interests')->find($customerId);
            if (!$customer) {
                return $this->sendError("Customer not found.", 404);
            }
            $interestIds = $customer->interests->pluck('id');
            if ($interestIds->isNotEmpty()) {
                $query->join('music_interest_type', 'music.id', '=', 'music_interest_type.music_id')
                    ->orderByRaw("FIELD(music_interest_type.interest_id, " . implode(',', $interestIds->toArray()) . ") DESC");
            }
        } else {
            $query->orderBy('total_view', 'desc');
        }
        $music = $query->simplePaginate($perPage);
        return $this->sendResponse($music, "Get Music List SuccessFully.");
    }

    public function WorkShopList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $id = $request->input('id', 0);
        if ($id > 0) {
            WorkShop::where('id', $id)->increment('total_view', 1);
            $workShop =  WorkShop::select('id', 'name', 'short_description', 'description', 'thumb_image', 'hi_video_url', 'en_video_url', 'premium_type', 'second', 'total_view')->where('status', 'Active')->find($id);
            return $this->sendResponse($workShop, "Get WorkShop Record SuccessFully.");
        }
        $customerId = $request->input('customer_id');
        $query = WorkShop::select('id', 'name', 'short_description', 'description', 'thumb_image', 'hi_video_url', 'en_video_url', 'premium_type', 'second', 'total_view')
            ->where('status', 'Active');
        if ($customerId) {
            $customer = Customer::with('interests')->find($customerId);
            if (!$customer) {
                return $this->sendError("Customer not found.", 404);
            }
            $interestIds = $customer->interests->pluck('id');
            if ($interestIds->isNotEmpty()) {
                $query->join('workshop_interest_type', 'work_shops.id', '=', 'workshop_interest_type.workshop_id')
                    ->orderByRaw("FIELD(workshop_interest_type.interest_id, " . implode(',', $interestIds->toArray()) . ") DESC");
            }
        } else {
            $query->orderBy('total_view', 'desc');
        }
        $workShop = $query->simplePaginate($perPage);
        return $this->sendResponse($workShop, "Get WorkShop List SuccessFully.");
    }

    public function getWorkshopsByCategory(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $categoryId = $request->input('category_id', null); // Add filter for category ID

        $query = WorkShop::select('id', 'name', 'short_description', 'description', 'thumb_image', 'hi_video_url', 'en_video_url', 'premium_type', 'second', 'total_view')
            ->where('status', 'Active');
        $query->when($categoryId, function ($q) use ($categoryId) {
            $q->whereHas('workshopCategory', function ($query) use ($categoryId) {
                $query->where('id', $categoryId);
            });
        });
        $templates = $query->simplePaginate($perPage);
        $templates->each(function ($template) {
            unset($template->pivot);
        });
        return $this->sendResponse($templates, "Get Template List Successfully.");
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
        $customer = Customer::with('interests:id', 'customerPurchasePlan:id')->find($customerId);
        $interestIds = isset($customer->interests) ? collect($customer->interests->pluck('id')) : collect([]);
        $purchasePlanId = $customer->customerPurchasePlan->id ?? null;
        $meditationType = MeditationType::select('id', 'name')->get();
        if ($customerId) {
            $meditationAudioQuery = MeditationAudio::with('premiumPlans:id,name')
                ->select(
                    'meditation_audio.id',
                    'meditation_audio.name',
                    'meditation_audio.short_description',
                    'meditation_audio.description',
                    'meditation_audio.audio_thumb',
                    'meditation_audio.inner_thumb',
                    'meditation_audio.audio_upload',
                    'meditation_audio.premium_type',
                    'meditation_audio.total_view'
                );
            if ($interestIds->isNotEmpty()) {
                $meditationAudioQuery->join('meditation_audio_interest_type', 'meditation_audio.id', '=', 'meditation_audio_interest_type.meditation_audio_id')
                    ->join('meditation_audio_premium_plan', 'meditation_audio.id', '=', 'meditation_audio_premium_plan.meditation_audio_id')
                    ->where('meditation_audio.status', 'Active')
                    ->groupBy('meditation_audio.id')
                    ->orderByRaw("FIELD(MAX(meditation_audio_interest_type.interest_id), " . implode(',', $interestIds->toArray()) . ") DESC");
            }
            if ($purchasePlanId) {
                if (!$interestIds->isNotEmpty()) {
                    $meditationAudioQuery->join('meditation_audio_premium_plan', 'meditation_audio.id', '=', 'meditation_audio_premium_plan.meditation_audio_id');
                }
                $meditationAudioQuery->where('meditation_audio.status', 'Active')
                    ->groupBy('meditation_audio.id')
                    ->orderByRaw("CASE WHEN meditation_audio_premium_plan.premium_plan_id = $purchasePlanId THEN 1 ELSE 0 END DESC");
            }
            $meditationAudio = $meditationAudioQuery->take(5)->get();
            if ($meditationAudio->count() < 5) {
                $additionalRecords = MeditationAudio::with('premiumPlans:id,name')
                    ->where('status', 'Active')
                    ->whereNotIn('id', $meditationAudio->pluck('id'))
                    ->latest()
                    ->take(5 - $meditationAudio->count())
                    ->get();
                $meditationAudio = $meditationAudio->merge($additionalRecords);
            }
        } else {
            $meditationAudio = MeditationAudio::with('premiumPlans:id,name')->select('id', 'name', 'short_description', 'description', 'audio_thumb','inner_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active')->latest()->take(5)->get();
        }
        $musicQuery = Music::select('id', 'name', 'short_description', 'description', 'audio_thumb','inner_thumb', 'audio_upload', 'premium_type', 'total_view')->where('status', 'Active');
        if ($interestIds->isNotEmpty()) {
            $musicQuery->join('music_interest_type', 'music.id', '=', 'music_interest_type.music_id')
                ->orderByRaw("FIELD(music_interest_type.interest_id, " . implode(',', $interestIds->toArray()) . ") DESC");
        } else {
            $musicQuery->latest();
        }
        $music = $musicQuery->take(5)->get();
        $workshop_category = WorkshopCategory::select('id', 'name', 'thumb_image')->where('status', 'Active')->latest()->take(value: 10)->get();
        $myTracking = [
            "total_day" => Carbon::now()->daysInMonth,
            "progress_day" => 0,
            "listening_time" => 0,
            "total_time" => 0
        ];
        $recent = [];
        $today = Carbon::today();
        if ($customerId > 0) {
            $customer = TrackMeditation::where('customer_id', $customerId)->latest()->first();
            $listeningTimeCount = TrackMeditation::where('customer_id', $customerId)
                ->whereDate('created_at', $today)
                ->sum('listening_time');
            if ($customer) {
                $myTracking["listening_time"] = intval($listeningTimeCount);
                $myTracking["total_time"] = intval($customer->total_time);
                $progressDays = TrackMeditation::where('customer_id', $customerId)
                    ->whereMonth('created_at', Carbon::now()->month)
                    ->whereYear('created_at', Carbon::now()->year)
                    ->select(DB::raw('DATE(created_at) as date'))
                    ->distinct()
                    ->count();
                $myTracking["progress_day"] = $progressDays;
            }
            $customersRecent = Recent::where('customer_id', $request->customer_id)
                ->latest()
                ->take(5)
                ->get();
            $recent = [];
            foreach ($customersRecent as $favorite) {
                switch ($favorite->type) {
                    case 'meditation_audio':
                        $item = MeditationAudio::select('id', 'name', 'short_description', 'description', 'audio_thumb as thumb',  'premium_type', 'created_at', DB::raw("'meditation_audio' as type"))
                            ->find($favorite->type_id);
                        if ($item && $item->thumb) {
                            $item->thumb = config('app.url') . "/" . $item->thumb;
                        }
                        $item['recent_id'] = $favorite->id;
                        $recent[] = $item;
                        break;
                    case 'music':
                        $item = Music::select('id', 'name', 'short_description', 'description', 'audio_thumb as thumb', 'premium_type',  'created_at', DB::raw("'music' as type"))
                            ->find($favorite->type_id);
                        if ($item && $item->thumb) {
                            $item->thumb = config('app.url') . "/" . $item->thumb;
                        }
                        $item['recent_id'] = $favorite->id;
                        $recent[] = $item;
                        break;
                    case 'work_shops':
                        $item = WorkshopCategory::select('id', 'name', DB::raw('NULL as short_description'), DB::raw('NULL as description'), 'thumb_image as thumb', DB::raw('NULL as premium_type'),  'created_at', DB::raw("'work_shops' as type"))->find($favorite->type_id);
                        if ($item && $item->thumb) {
                            $item->thumb = config('app.url') . "/" . $item->thumb;
                        }
                        $item['recent_id'] = $favorite->id;
                        $recent[] = $item;
                        break;
                    default:
                        break;
                }
            }
        }

        $today = Carbon::today();
        $startDate = $today->addDay()->copy()->startOfDay();
        $endDate = $today->addDay()->copy()->endOfDay();
        $sliderEvents = Event::where('status', 'Active')->whereBetween('starting_date', ["$startDate", "$endDate"])->select('id', 'name', 'thumb_image', 'short_description', 'description', 'starting_date', 'location', 'total_joining', 'is_paid', 'fees',)->get();
        return $this->sendResponse([
            'meditation_type' => $meditationType,
            'meditation_audio' => $meditationAudio,
            'music' => $music,
            'workshop_category' => $workshop_category,
            'my_tracking' => $myTracking,
            'recent' => $recent,
            'slider' => $sliderEvents
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
            'business_id' => 'nullable|exists:businesses,id',
            'interest_ids' => 'nullable|array',
            'interest_ids.*' => 'exists:interest,id',
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
        $plan = PremiumPlan::where('is_free', 1)->first();
        CustomerPurchasePlan::firstOrCreate(
            ['customer_id' => $customer->id],
            ['premium_plan_id' => $plan->id]
        );
        if ($request->has('interest_ids')) {
            $customer->interests()->sync($request->input('interest_ids'));
        }
        return $this->sendResponse($customer, "Customer update successFully.");
    }

    public function userAvailable(Request $request)
    {
        $rules =  [
            'email' => 'required|email|exists:customers,email'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), [], 200);
        }
        $validator->validated();
        $customers = Customer::with('customerPurchasePlan:customer_id,premium_plan_id,note')->select('id', 'name', 'profile', 'country_name', 'mobile_no', 'email', 'business_category', 'dob')->where('email', $request->email)->first();
        $customers->premium_plan = isset($customers->customerPurchasePlan->premium_plan_id) ? PremiumPlan::select('id', 'name', 'short_description', 'description', 'total_amount', 'discount', 'total_user', 'total_payable_amount', 'thumb_upload', 'is_free')->find($customers->customerPurchasePlan->premium_plan_id) : [];
        $customers->is_free = isset($customers->premium_plan->is_free) && $customers->premium_plan->is_free == 1 ? true : false;
        return $this->sendResponse($customers, "Get Customer List SuccessFully.");
    }

    public function CustomerDelete(Request $request)
    {
        $rules =  [
            'email' => 'required|email|exists:customers,email'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), [], 200);
        }
        $validator->validated();
        $customer = Customer::where('email', $request->email)->first();
        if ($customer) {
            $customer->forceDelete();
            TrackMeditation::where('customer_id', $customer->id)->delete();
            return $this->sendResponse([], "Delete Customer SuccessFully.");
        }
        return $this->sendError('Customer not exist.', [], 200);
    }

    public function applyCoupon(Request $request)
    {
        $rules =  [
            'coupon' => 'required|string|exists:coupon_systems,coupon_code'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), [], 200);
        }
        $validator->validated();
        $coupon = CouponSystem::whereNull('deleted_at')->where('coupon_code', $request->coupon)->where('start_date', '<=', now())->where('end_date', '>=', now())->select('id', 'type', 'coupon_code', 'value')->first();
        if ($coupon) {
            $coupon->value = isset($coupon->value) && !is_null(isset($coupon->value)) ? floatval($coupon->value) : 0;
            return $this->sendResponse($coupon, "Get Coupon Data SuccessFully.");
        }
        return $this->sendError('Coupon not exist.', [], 200);
    }

    public function NotificationsList(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $customers = Notification::select('id', 'title', 'image', 'short_desc')->where('status', 'Active')->simplePaginate($perPage);
        return $this->sendResponse($customers, "Get Notification List SuccessFully.");
    }

    public function businessList()
    {
        $business = Business::select('id', 'name')->where('status', 'Active')->get();
        return $this->sendResponse($business, "Get Business List SuccessFully.");
    }

    public function CustomerPremiumPlan(Request $request)
    {
        $rules =  [
            'note' => 'nullable|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'premium_plan_id' => 'required|exists:premium_plans,id',
            'response' => "nullable"
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), [], 200);
        }

        $validator->validated();
        $customer = Customer::whereNull('deleted_at')->where('id', $request->customer_id)->first();
        if ($customer) {
            $premiumPlan = PremiumPlan::whereNull('deleted_at')->where('id', $request->premium_plan_id)->first();
            $response = is_array($request->response) ? json_encode($request->response) : $request->response;
            if ($premiumPlan) {
                $purchasePlan = CustomerPurchasePlan::updateOrCreate(
                    ['customer_id' => $request->customer_id],
                    ['premium_plan_id' => $request->premium_plan_id, 'note' => $request->note, 'response' => $response]
                );
                return $this->sendResponse($purchasePlan, "Purchase plan SuccessFully.");
            }
            return $this->sendError('premium_plan_id not valid.', [], 200);
        }
        return $this->sendError('customer_id not valid.', [], 200);
    }
}
