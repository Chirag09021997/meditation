<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
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
        return view('frontend.events-list');
    }

    public function eventSingle(string $id)
    {
        return view('frontend.event-detail');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
