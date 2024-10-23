<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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

    public function aboutSec()
    {
        return view('frontend.about-2');
    }
}
