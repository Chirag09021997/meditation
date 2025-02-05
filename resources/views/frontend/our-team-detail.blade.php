@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="bg_light_pink breadcrumb_section">
        <div class="abt-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>Our Team Details</h1>
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

    <!-- START SECTION TRAINER INFO -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="trainer_image">
                        <img src="{{ $ourTeam->profile }}" alt="{{ $ourTeam->name }}">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team_detail">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <h5>Personal Info</h5>
                                <hr>
                                <ul class="list_none trainer_info">
                                    <li>
                                        <span>Name:</span>
                                        <p>{{ $ourTeam->name }}</p>
                                    </li>
                                    <li>
                                        <span>Speciality:</span>
                                        <p>{{ $ourTeam->speciality }}</p>
                                    </li>
                                    <li>
                                        <span>Experience:</span>
                                        <p>{{ $ourTeam->experience }}</p>
                                    </li>
                                    <li>
                                        <span>Phone No:</span>
                                        <p>{{ $ourTeam->phone_no }}</p>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <a href="mailto:{{ $ourTeam->email }}">{{ $ourTeam->email }}</a>
                                    </li>
                                    <li>
                                        <span>Social:</span>
                                        <ul class="list_none social_icons border_social">
                                            @if ($ourTeam->facebook_url)
                                                <li><a href="{{ $ourTeam->facebook_url }}"><i
                                                            class="ion-social-facebook"></i></a></li>
                                            @endif
                                            @if ($ourTeam->twitter_url)
                                                <li><a href="{{ $ourTeam->twitter_url }}"><i
                                                            class="ion-social-twitter"></i></a></li>
                                            @endif
                                            @if ($ourTeam->google_url)
                                                <li><a href="{{ $ourTeam->google_url }}"><i
                                                            class="ion-social-googleplus"></i></a></li>
                                            @endif
                                            @if ($ourTeam->youtube_url)
                                                <li><a href="{{ $ourTeam->youtube_url }}"><i
                                                            class="ion-social-youtube-outline"></i></a></li>
                                            @endif
                                            @if ($ourTeam->instagram_url)
                                                <li><a href="{{ $ourTeam->instagram_url }}"><i
                                                            class="ion-social-instagram-outline"></i></a></li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h5>Trainers Skill:</h5>
                                <hr>
                                <div class="progress_content">
                                    <div class="progrees_bar_text">
                                        @foreach (explode(',', $ourTeam->trainers_skill) as $skill)
                                            <p>{{ $skill }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="small_divider clearfix"></div>
                    <h5>About</h5>
                    <hr>
                    <div class="description">
                        {!! $ourTeam->about !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TRAINER INFO -->

    <!-- START SECTION TEACHER -->
    <section class="bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="heading_s1">
                        <h3>Related Trainers</h3>
                    </div>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="carousel_slider owl-carousel owl-theme nav_top_right" data-margin="20" data-loop="true"
                        data-autoplay="true" data-dots="false" data-nav="true"
                        data-responsive='{"0":{"items": "1"}, "575":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        @foreach ($ourTeamMembers as $team)
                            <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                <div class="team_img">
                                    <img src="{{ $team->profile }}" alt="{{ $team->name }}">
                                    <ul class="list_none social_icons social_style1 rounded_social">
                                        @if ($team->facebook_url)
                                            <li><a href="{{ $team->facebook_url }}"><i class="ion-social-facebook"></i></a>
                                            </li>
                                        @endif
                                        @if ($team->twitter_url)
                                            <li><a href="{{ $team->twitter_url }}"><i class="ion-social-twitter"></i></a>
                                            </li>
                                        @endif
                                        @if ($team->google_url)
                                            <li><a href="{{ $team->google_url }}"><i class="ion-social-googleplus"></i></a>
                                            </li>
                                        @endif
                                        @if ($team->youtube_url)
                                            <li><a href="{{ $team->youtube_url }}"><i
                                                        class="ion-social-youtube-outline"></i></a></li>
                                        @endif
                                        @if ($team->instagram_url)
                                            <li><a href="{{ $team->instagram_url }}"><i
                                                        class="ion-social-instagram-outline"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="team_info text-center">
                                    <div class="team_title">
                                        <h5><a href="#">{{ $team->name }}</a></h5>
                                        <span>{{ $team->post }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TEACHER -->
@endsection
