@extends('frontend.layouts.app')
@section('content')
{{-- <!-- START SECTION BREADCRUMB --> --}}
<section class="bg_light_pink breadcrumb_section">
    <div class="abt-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title space">
                        <h1>About Us</h1>
                    </div>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <!-- END SECTION BREADCRUMB --> --}}

{{-- <!-- START SECTION ABOUT --> --}}
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="video_box overlay_bg_30 mb-3 mb-sm-4 mb-md-0">
                    <img src="{{ $settings['about_thumb'] ?? '' }}" alt="about_img11">
                    <a href="{{ $settings['youtube_url'] ?? '' }}" class="video_popup video_play"><span
                            class="ripple"><i class="fa-solid fa-play"></i></span></a>
                </div>
            </div>
            <div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="heading_s1">
                    <span class="sub_heading">Welcome to Tejas Aura</span>
                    <h2>Meditation & Spirituality Meet Innovation</h2>
                </div>
                <p> We are dedicated to guiding individuals on their journey to inner peace, spiritual growth, and
                    self-discovery. At Tejas Aura, we blend ancient wisdom with modern tools, offering a holistic
                    approach to meditation and spiritual teaching that empowers you to cultivate harmony in every aspect
                    of your life.</p>
                <!-- <p>Tejas Aur established in February 2016 and Tejas Aur Consultant Pvt. Ltd. incorporate in February 2021. The main objective of this company is to help people engaged in and seeking meditation and spiritual practice. Tejas Aura Consultant Company works to be the necessary teaching and product for such people. So far more than 5000 people have benefited through more than 200 seminars and workshops by this company. Currently the company is also operating in Canada under the name Tej Aura Consultants Ltd. Different countries of the world e.g. Delta meditation sheets are also being used by people in the US, Australia, New Zealand, Canada and Nepal.</p> -->
                <a href="/life" target="_blank" class="btn btn-default rounded-0">Read More</a>
            </div>
        </div>
    </div>
</section>
{{-- <!-- END SECTION ABOUT --> --}}

{{-- <!-- START SECTION BENIFIT --> --}}

<section class="bg_gray ess-sect">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 ">
                    <!-- <span class="sub_heading">Welcome to Dhyana</span> -->
                    <h2>Our Principles</h2>
                </div>
                <p> A joyful and peaceful life from the experience of our life. Due to which the productivity and
                    success in every work of life increased, he made it the principal of life and decided to work on it
                    for people.
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="box_icon">
                        <img src="{{ asset('assets/images/strong-body.png') }}" width="35" height="35"
                            alt="strong-body">
                    </div>
                    <div class="intro_desc">
                        <h5>Meditation</h5>
                        <p> We believe that meditation can transform everyone, so we teach people to meditate. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                    data-animation-delay="0.3s">
                    <div class="box_icon">
                        <img src="{{ asset('assets/images/flexibility.png') }}" width="35" height="35"
                            alt="flexibility">
                    </div>
                    <div class="intro_desc">
                        <h5>Aura</h5>
                        <p> Helping people to have a holy and pure aura give people well-being in their lives. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                    data-animation-delay="0.4s">
                    <div class="box_icon">
                        <img src="{{ asset('assets/images/healthy-lifestyle.png') }}" width="35" height="35"
                            alt="healthy-lifestyle">
                    </div>
                    <div class="intro_desc">
                        <h5>Thoughts</h5>
                        <p> Unnecessary thoughts reduce the productivity of human life, so teach a method for managing
                            thoughts. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-sm-6"></div>

            <div class="col-lg-4 col-sm-6">
                <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="box_icon">
                        <img src="{{ asset('assets/images/blood-flow.png') }}" width="35" height="35" alt="blood-flow">
                    </div>
                    <div class="intro_desc">
                        <h5>Energy </h5>
                        <p> Understanding and awareness of inner energy is helpful in making life successful so act on
                            inner energy and spread it. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6"> </div>

            <div class="col-lg-4 col-sm-6">
                <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                    data-animation-delay="0.4s">
                    <div class="box_icon">
                        <img src="{{ asset('assets/images/adrenal-gland.png') }}" width="35" height="35"
                            alt="adrenal-gland">
                    </div>
                    <div class="intro_desc">
                        <h5>Vibration</h5>
                        <p> Do practical and theoretical work on topics like vibration, frequency. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-sm-6"></div>
        </div>
    </div>
    <!-- <div class="banner_shape">
        <div class="shape1">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ asset('assets/images/pattern2.svg') }}" alt="image" />
            </div>
        </div>
        <div class="shape2">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ asset('assets/images/pattern1.svg') }}" alt="image" />
            </div>
        </div>
    </div> -->
</section>
{{-- <!-- END SECTION BENIFIT --> --}}

{{-- <!-- START SECTION TESTIMONIAL --> --}}
<!-- <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">Testimonial</span>
                        <h2>Our Client Say!</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id
                        varius nunc id varius nunc.</p>
                    <div class="xs_divider clearfix d-none d-md-block"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme"
                        data-margin="15" data-loop="true" data-autoplay="true"
                        data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
                        <div class="testimonial_box">
                            <div class="testi_meta">
                                <div class="testimonial_img">
                                    <img src="{{ asset('assets/images/client_img1.jpg') }}" alt="client">
                                </div>
                                <div class="testi_user">
                                    <h5>Merry Walter</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                            <div class="testi_desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                    Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testi_meta">
                                <div class="testimonial_img">
                                    <img src="{{ asset('assets/images/client_img2.jpg') }}" alt="client">
                                </div>
                                <div class="testi_user">
                                    <h5>Elena Mark</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                            <div class="testi_desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                    Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testi_meta">
                                <div class="testimonial_img">
                                    <img src="{{ asset('assets/images/client_img3.jpg') }}" alt="client">
                                </div>
                                <div class="testi_user">
                                    <h5>Calvin William</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                            <div class="testi_desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                    Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testi_meta">
                                <div class="testimonial_img">
                                    <img src="{{ asset('assets/images/client_img4.jpg') }}" alt="client">
                                </div>
                                <div class="testi_user">
                                    <h5>Maria Wolter</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                            <div class="testi_desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                    Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
{{-- <!-- END SECTION TESTIMONIAL --> --}}

{{-- <!-- START SECTION COUNTER --> --}}
<!-- <section class="overlay_bg_70 parallax_bg" data-parallax-bg-image="{{ asset('assets/images/counter_bg.jpg') }}"> -->
<section style="background-color: rgb(40, 87, 155);">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="box_counter counter_white text-center">
                    <i class="fa-solid fa-child"></i>
                    <h3 class="counter_text"><span class="counter">{{ $outTeams->count() }}</span>+</h3>
                    <p>Our Trainers</p>
                </div>
            </div>
            <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="box_counter counter_white text-center">
                    <i class="fa-solid fa-trophy"></i>
                    <h3 class="counter_text"><span class="counter">{{ $cirtificateCounter }}</span>+</h3>
                    <p>Win Certificate</p>
                </div>
            </div>
            <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="box_counter counter_white text-center">
                    <i class="fa-solid fa-users"></i>
                    <h3 class="counter_text"><span class="counter">{{ $customerCounter }}</span>+</h3>
                    <p>Happy Member</p>
                </div>
            </div>
            <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                <div class="box_counter counter_white text-center">
                    <i class="fa-solid fa-school"></i>
                    <h3 class="counter_text"><span class="counter">{{ $eventCounter }}</span>+</h3>
                    <p>Completed Events</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <!-- END SECTION COUNTER --> --}}


{{-- <!-- START SECTION TEACHER --> --}}
@if ($outTeams->count() > 0)

    <section class="bg_light_pink pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <!-- <span class="sub_heading">Yoga teacher</span> -->
                        <h2>Our Tejas Team</h2>
                    </div>
                    <p>Our Tejas Team is passionate about innovation and excellence, working together to create impactful
                        solutions with trust and quality. 🚀</p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme"
                        data-margin="15" data-loop="true" data-autoplay="true"
                        data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
                        @foreach ($outTeams as $ourTeam)
                            <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                <div class="team_bor">
                                    <div class="team_img">
                                        <img src="{{ $ourTeam->profile }}" alt="{{ $ourTeam->name }}"
                                            onerror="this.onerror=null;this.src='{{ asset('assets/images/event_loading.png') }}';">
                                        <ul class="list_none social_icons social_style1 rounded_social">
                                            @if ($ourTeam->facebook_url)
                                                <li><a href="{{ $ourTeam->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                            @endif
                                            @if ($ourTeam->twitter_url)
                                                <li><a href="{{ $ourTeam->twitter_url }}"><i class="fab fa-twitter"></i></a></li>
                                            @endif
                                            @if ($ourTeam->google_url)
                                                <li><a href="{{ $ourTeam->google_url }}"><i class="fab fa-google-plus-g"></i></a>
                                                </li>
                                            @endif
                                            @if ($ourTeam->instagram_url)
                                                <li><a href="{{ $ourTeam->instagram_url }}"><i class="fab fa-instagram"></i></a>
                                                </li>
                                            @endif
                                            @if ($ourTeam->youtube_url)
                                                <li><a href="{{ $ourTeam->youtube_url }}"><i class="fab fa-youtube"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                                <div class="team_info text-center">
                                    <div class="team_title">
                                        <h5><a href="{{route('our-team-single', $ourTeam)}}">{{ $ourTeam->name }}</a></h5>
                                        <span>{{ $ourTeam->post }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
{{-- <!-- END SECTION TEACHER --> --}}

@endsection