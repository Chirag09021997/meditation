<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\CouponSystem;
use App\Models\CustomerEvents;
use App\Models\Event;
use App\Models\Order;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 'Active')->latest()->take(3)->get();
        $blogs->transform(function ($blog) {
            $blog->formatted_date = Carbon::parse($blog->starting_date)->format('d M');
            $blog->formatted_time = Carbon::parse($blog->starting_date)->format('H:i');
            return $blog;
        });
        return view('frontend.index', compact('blogs'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function delta()
    {
        return view('frontend.delta');
    }

    public function life()
    {
        return view('frontend.life');
    }

    public function eventsList()
    {
        $events = Event::where('status', 'Active')->select('id', 'name', 'thumb_image', 'starting_date', 'location')->orderByDesc('created_at')->paginate(9);
        $events->getCollection()->transform(function ($event) {
            $event->formatted_date = Carbon::parse($event->starting_date)->format('d M');
            $event->formatted_time = Carbon::parse($event->starting_date)->format('H:i');
            return $event;
        });
        return view('frontend.events-list', compact('events'));
    }

    public function eventSingle(string $id)
    {
        $event = Event::where('status', 'Active')->select('id', 'name', 'thumb_image', 'short_description', 'description', 'starting_date', 'location', 'total_joining', 'is_paid', 'fees')->findOrFail($id);
        $event->formatted_date = Carbon::parse($event->starting_date)->format('M d, Y');
        $event->formatted_time = Carbon::parse($event->starting_date)->format('h:i A');

        $events = Event::where('status', 'Active')->select('id', 'name', 'thumb_image', 'starting_date', 'location')->latest()->take(5)->get();
        $events->transform(function ($event) {
            $event->formatted_date = Carbon::parse($event->starting_date)->format('d M');
            $event->formatted_time = Carbon::parse($event->starting_date)->format('H:i');
            return $event;
        });
        return view('frontend.events-detail', compact('event', 'events'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blogsList()
    {
        $blogs = Blog::with(['users:id,name,profile'])->where('status', 'Active')->select('id', 'name', 'short_description', 'thumb_image')->orderByDesc('created_at')->paginate(9);
        $blogs->getCollection()->transform(function ($blog) {
            $blog->formatted_date = Carbon::parse($blog->created_at)->format('M d, Y');
            return $blog;
        });
        return view('frontend.blogs-list', compact('blogs'));
    }

    public function blogSingle(string $id)
    {
        $blog = Blog::with(['users:id,name,profile'])->where('status', 'Active')->select('id', 'name', 'short_description', 'description', 'thumb_image', 'total_view', 'created_by')->findOrFail($id);
        $blog->formatted_date = Carbon::parse($blog->created_at)->format('M d, Y');
        return view('frontend.blogs-detail', compact('blog'));
    }

    public function storeList()
    {
        $stores = Store::where('status', 'Active')->select('id', 'product_name', 'product_thumb',  'price', 'discount')->latest()->paginate(9);
        $latestStore = Store::where('status', 'Active')->select('id', 'product_name', 'product_thumb',  'price', 'discount')->latest()->take(3)->get();
        return view('frontend.stores-list', compact('stores', 'latestStore'));
    }

    public function storeSingle(string $id)
    {
        $store = Store::where('status', 'Active')->select('id', 'product_name', 'short_description', 'description', 'product_thumb', 'video_preview', 'price', 'total_stock', 'total_sale', 'discount', 'tags')->findOrFail($id);
        $latestStore = Store::where('status', 'Active')->select('id', 'product_name', 'product_thumb',  'price', 'discount')->latest()->take(4)->get();
        return view('frontend.stores-detail', compact('store', 'latestStore'));
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        $jsonPath = public_path('assets/country.json');
        $countries = json_decode(file_get_contents($jsonPath), true);
        return view('frontend.checkout', compact('countries'));
    }

    public function checkoutStore(Request $request)
    {
        $cartItems = json_decode($request->input('cartItems'), true);
        $request->merge(['cartItems' => $cartItems]);
        $validatedData = $request->validate([
            'b_fname' => 'required|string|max:255',
            'b_lname' => 'required|string|max:255',
            'b_country' => 'required|string|max:2',
            'b_address' => 'required|string|max:255',
            'b_address2' => 'required|string|max:255',
            'b_city' => 'required|string|max:255',
            'b_state' => 'required|string|max:255',
            'b_zipcode' => 'required|string|max:10',
            'b_phone' => 'required|string|max:15',
            'b_email' => 'required|email|max:255',
            's_fname' => 'nullable|string|max:255',
            's_lname' => 'nullable|string|max:255',
            's_country' => 'nullable|string|max:2',
            's_address' => 'nullable|string|max:255',
            's_address2' => 'nullable|string|max:255',
            's_city' => 'nullable|string|max:255',
            's_state' => 'nullable|string|max:255',
            's_zipcode' => 'nullable|string|max:10',
            'cartItems' => 'required|array',
            'cartItems.*.id' => 'required|exists:stores,id',
            'cartItems.*.quantity' => 'required|integer|min:1',
            'coupon_code' => 'nullable|string|exists:coupon_systems,coupon_code',
        ]);
        $customer = Auth::guard('customer')->user();
        $coupon = CouponSystem::whereNull('deleted_at')->where('coupon_code', $request->coupon_code)->where('start_date', '<=', now())->where('end_date', '>=', now())->select('id', 'type', 'coupon_code', 'value')->first();
        $order = Order::create([
            'payment_option' => $request->input('payment_option'),
            'note' => $request->input('note'),
            'coupon_type' => $coupon?->type,
            'coupon_code' => $coupon?->coupon_code,
            'coupon_value' => $coupon?->value,
            'customer_id' => $customer->id,
        ]);

        $order->orderAddress()->create(array_merge($validatedData, ['customer_id' => auth()->id()]));

        foreach ($validatedData['cartItems'] as $cart) {
            $store = Store::find($cart['id']);
            $order->orderItem()->create([
                'store_id' => $cart['id'],
                'quantity' => $cart['quantity'],
                'price' => $store->price,
                'discount' => $store->discount
            ]);
        }
        return redirect()->route('home')->with('success', "Order created successFully.");
    }

    public function contactStore(ContactUsRequest $request)
    {
        $validated = $request->validated();
        ContactUs::create($validated);
        return redirect()->route('home')->with('success', 'Contact Us Send SuccessFully.');
    }

    public function refundPolicy()
    {
        return view('frontend.refund-policy');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function termCondition()
    {
        return view('frontend.term-condition');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function customerEventJoin(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:1000',
            'person' => 'nullable|integer|min:1',
            'total_fees' => 'nullable|numeric|min:0',
        ]);
        CustomerEvents::create($validated);
        return redirect()->route('home')->with('success', 'Event Join SuccessFully.');
    }
}
