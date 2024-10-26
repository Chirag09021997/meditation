<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function schedule()
    {
        return view('frontend.schedule');
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
        $blogs = Blog::where('status', 'Active')->select('id', 'name', 'short_description', 'thumb_image')->orderByDesc('created_at')->paginate(9);
        $blogs->getCollection()->transform(function ($blog) {
            $blog->formatted_date = Carbon::parse($blog->created_at)->format('M d, Y');
            return $blog;
        });
        return view('frontend.blogs-list', compact('blogs'));
    }

    public function blogSingle(string $id)
    {
        $blog = Blog::where('status', 'Active')->select('id', 'name', 'short_description', 'description', 'thumb_image', 'total_view')->findOrFail($id);
        $blog->formatted_date = Carbon::parse($blog->created_at)->format('M d, Y');
        return view('frontend.blogs-detail', compact('blog'));
    }

    public function storeList()
    {
        return view('frontend.stores-list');
    }

    public function storeSingle()
    {
        return view('frontend.stores-detail');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }
}
