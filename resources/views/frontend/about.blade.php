@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BREADCRUMB --> --}}
    <section class="bg_light_pink breadcrumb_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>About Us</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
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
                        <img src="{{ asset('assets/images/about_video.jpg') }}" alt="about_img11">
                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play"><span
                                class="ripple"><i class="fa-solid fa-play"></i></span></a>
                    </div>
                </div>
                <div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="heading_s1">
                        <span class="sub_heading">Welcome to Dhyana</span>
                        <h2>Better Life With Perfect Body</h2>
                    </div>
                    <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    <a href="#" class="btn btn-default rounded-0">Read More</a>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION ABOUT --> --}}

    {{-- <!-- START SECTION BENIFIT --> --}}
    <section class="bg_gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">What we do</span>
                        <h2>Essentials for everyday Yoga</h2>
                    </div>
                    <p>Contrary to popular belief Lorem is not simply random text. It has roots in adipiscing ncididunt
                        piece of classical literature</p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box box_shadow4 icon_box_style2 animation" data-animation="fadeInRight"
                        data-animation-delay="0.2s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/strong-body.png') }}" width="35" height="35"
                                alt="strong-body">
                        </div>
                        <div class="intro_desc">
                            <h5>Strong Body life</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                    <div class="icon_box box_shadow4 icon_box_style2 animation" data-animation="fadeInRight"
                        data-animation-delay="0.3s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/flexibility.png') }}" width="35" height="35"
                                alt="flexibility">
                        </div>
                        <div class="intro_desc">
                            <h5>increased flexibility</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-last">
                    <div class="icon_box box_shadow4 icon_box_style2 animation" data-animation="fadeInLeft"
                        data-animation-delay="0.2s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/healthy-lifestyle.png') }}" width="35" height="35"
                                alt="healthy-lifestyle">
                        </div>
                        <div class="intro_desc">
                            <h5>healthy lifestyle</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                    <div class="icon_box box_shadow4 icon_box_style2 animation" data-animation="fadeInLeft"
                        data-animation-delay="0.3s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/drops-blood.png') }}" width="35" height="35"
                                alt="drops-blood">
                        </div>
                        <div class="intro_desc">
                            <h5>Drops blood pressure</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center benifits_bg animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <img src="{{ asset('assets/images/benifits_img.png') }}" alt="benifits_img" />
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- <!-- END SECTION BENIFIT --> --}}

    {{-- <!-- START SECTION TESTIMONIAL --> --}}
    <section>
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
    </section>
    {{-- <!-- END SECTION TESTIMONIAL --> --}}

    {{-- <!-- START SECTION COUNTER --> --}}
    <section class="overlay_bg_70 parallax_bg" data-parallax-bg-image="{{ asset('assets/images/counter_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="box_counter counter_white text-center">
                        <i class="fa-solid fa-child"></i>
                        <h3 class="counter_text"><span class="counter">18</span>+</h3>
                        <p>Our Trainers</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="box_counter counter_white text-center">
                        <i class="fa-solid fa-trophy"></i>
                        <h3 class="counter_text"><span class="counter">15</span>+</h3>
                        <p>Win Awards</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="box_counter counter_white text-center">
                        <i class="fa-solid fa-users"></i>
                        <h3 class="counter_text"><span class="counter">1800</span>+</h3>
                        <p>Happy Member</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                    <div class="box_counter counter_white text-center">
                        <i class="fa-solid fa-school"></i>
                        <h3 class="counter_text"><span class="counter">45</span>+</h3>
                        <p>Monthly Classes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION COUNTER --> --}}

    {{-- <!-- START SECTION TEACHER --> --}}
    <section class="bg_light_pink pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">Yoga teacher</span>
                        <h2>Our Awesome Team</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="team_img">
                            <img src="{{ asset('assets/images/team1.jpg') }}" alt="team1">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5><a href="#">Elena Mark</a></h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="team_img">
                            <img src="{{ asset('assets/images/team2.jpg') }}" alt="team2">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5><a href="#">Grace Wong</a></h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="team_img">
                            <img src="{{ asset('assets/images/team3.jpg') }}" alt="team3">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5><a href="#">Maria Redwood</a></h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <div class="team_img">
                            <img src="{{ asset('assets/images/team4.jpg') }}" alt="team4">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5><a href="#">Merry Walter</a></h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION TEACHER --> --}}
@endsection
