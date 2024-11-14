<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Event;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $event->formatted_time = Carbon::parse($event->starting_date)->format('H:i');

        $events = Event::where('status', 'Active')->select('id', 'name', 'thumb_image', 'starting_date', 'location')->latest()->take(5)->get();
        $events->transform(function ($event) {
            $event->formatted_date = Carbon::parse($event->starting_date)->format('d M');
            $event->formatted_time = Carbon::parse($event->starting_date)->format('H:i');
            return $event;
        });
        return view('frontend.event-detail', compact('event', 'events'));
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
}
