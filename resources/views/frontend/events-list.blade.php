@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg3.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Events</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION EVENTS -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s">
                        <div class="event_img">
                            <a href="{{ route('events.single', 1) }}"><img src="{{ asset('assets/images/event_img1.jpg') }}"
                                    alt="event_img" /></a>
                            <div class="event_date">
                                <h5><span>24</span> Apr</h5>
                            </div>
                        </div>
                        <div class="event_info">
                            <h5 class="event_title"><a href="#">Yoga Fitness Experience</a></h5>
                            <ul class="list_none event_meta">
                                <li><i class="fa-regular fa-clock"></i>9:00 - 4:00</li>
                                <li><i class="fa-solid fa-location-pin"></i>New York City</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp"
                        data-animation-delay="0.3s">
                        <div class="event_img">
                            <a href="{{ route('events.single', 1) }}"><img src="{{ asset('assets/images/event_img2.jpg') }}"
                                    alt="event_img" /></a>
                            <div class="event_date">
                                <h5><span>26</span> Apr</h5>
                            </div>
                        </div>
                        <div class="event_info">
                            <h5 class="event_title"><a href="#">Hatha Yoga Training Festival</a></h5>
                            <ul class="list_none event_meta">
                                <li><i class="fa-regular fa-clock"></i>9:00 - 4:00</li>
                                <li><i class="fa-solid fa-location-pin"></i>New York City</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp"
                        data-animation-delay="0.4s">
                        <div class="event_img">
                            <a href="{{ route('events.single', 1) }}"><img src="{{ asset('assets/images/event_img3.jpg') }}"
                                    alt="event_img" /></a>
                            <div class="event_date">
                                <h5><span>28</span> Apr</h5>
                            </div>
                        </div>
                        <div class="event_info">
                            <h5 class="event_title"><a href="#">Hatha Yoga Training Festival</a></h5>
                            <ul class="list_none event_meta">
                                <li><i class="fa-regular fa-clock"></i>9:00 - 4:00</li>
                                <li><i class="fa-solid fa-location-pin"></i>New York City</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp"
                        data-animation-delay="0.4s">
                        <div class="event_img">
                            <a href="{{ route('events.single', 1) }}"><img src="{{ asset('assets/images/event_img4.jpg') }}"
                                    alt="event_img" /></a>
                            <div class="event_date">
                                <h5><span>28</span> Apr</h5>
                            </div>
                        </div>
                        <div class="event_info">
                            <h5 class="event_title"><a href="#">Hatha Yoga Training Festival</a></h5>
                            <ul class="list_none event_meta">
                                <li><i class="fa-regular fa-clock"></i>9:00 - 4:00</li>
                                <li><i class="fa-solid fa-location-pin"></i>New York City</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp"
                        data-animation-delay="0.4s">
                        <div class="event_img">
                            <a href="{{ route('events.single', 1) }}"><img
                                    src="{{ asset('assets/images/event_img5.jpg') }}" alt="event_img" /></a>
                            <div class="event_date">
                                <h5><span>28</span> Apr</h5>
                            </div>
                        </div>
                        <div class="event_info">
                            <h5 class="event_title"><a href="#">Hatha Yoga Training Festival</a></h5>
                            <ul class="list_none event_meta">
                                <li><i class="fa-regular fa-clock"></i>9:00 - 4:00</li>
                                <li><i class="fa-solid fa-location-pin"></i>New York City</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp"
                        data-animation-delay="0.4s">
                        <div class="event_img">
                            <a href="{{ route('events.single', 1) }}"><img
                                    src="{{ asset('assets/images/event_img6.jpg') }}" alt="event_img" /></a>
                            <div class="event_date">
                                <h5><span>28</span> Apr</h5>
                            </div>
                        </div>
                        <div class="event_info">
                            <h5 class="event_title"><a href="#">Hatha Yoga Training Festival</a></h5>
                            <ul class="list_none event_meta">
                                <li><i class="fa-regular fa-clock"></i>9:00 - 4:00</li>
                                <li><i class="fa-solid fa-location-pin"></i>New York City</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3 mt-lg-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i
                                    class="ion-ios-arrow-thin-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="ion-ios-arrow-thin-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION EVENTS -->
@endsection
