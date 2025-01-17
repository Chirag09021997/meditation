@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg4.jpg') }}">
        <div class="abt-sec">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>Events Details</h1>
                        </div>
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events Details</li>
                            </ol>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION EVENTS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="single_events">
                        <div class="event_img">
                            <img src="{{ $event->thumb_image }}" alt="thumb_image">
                        </div>
                        <div class="events_title">
                            <h2>{{ $event->name }}</h2>
                        </div>
                        <div class="event_desc">
                            {!! $event->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 pt-3 pt-lg-0">
                    <div class="sidebar">
                        <div class="widget event_detail box_shadow4">
                            <h5 class="widget_title">Event Infomation</h5>
                            <div class="event_list">
                                <ul class="border_bottom_dash">
                                    <li>
                                        <div class="classes_cat">
                                            <label>Time: </label>
                                            <span>{{ $event->formatted_time }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_cat">
                                            <label>Start Date: </label>
                                            <span>{{ $event->formatted_date }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_student">
                                            <label>Location: </label>
                                            <span>{{ $event->location }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_student">
                                            <label>Fees: </label>
                                            <span>{{ $event->fees }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-default btn-block mt-3">Register Now</a>
                        </div>
                        <div class="widget event_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513"
                                allowfullscreen=""></iframe>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Featured Events</h5>
                            <div class="carousel_slider owl-carousel owl-theme" data-margin="15" data-dots="false"
                                data-loop="true" data-autoheight="true" data-autoplay="true" data-items="1">
                                @foreach ($events as $event)
                                    <div class="items">
                                        <div class="event_box event_box_style1 box_shadow4 animation"
                                            data-animation="fadeInUp" data-animation-delay="0.2s">
                                            <div class="event_img">
                                                <img src="{{ $event->thumb_image }}" alt="event_img" />
                                                <div class="event_date">
                                                    <h5>{{ $event->formatted_date }}</h5>
                                                </div>
                                            </div>
                                            <div class="event_info">
                                                <h5 class="event_title">{{ $event->name }}</h5>
                                                <ul class="list_none event_meta">
                                                    <li><i class="fa-regular fa-clock"></i>>{{ $event->formatted_time }}
                                                    </li>
                                                    <li><i class="fa-solid fa-location-pin"></i>{{ $event->location }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION EVENTS -->
@endsection
