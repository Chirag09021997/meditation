@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BANNER --> --}}
    <section class="banner_slider banner_slide_half p-0">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active bg_light_pink">
                    <div class="banner_slide_content">
                        <div class="container">
                            <div class="row justify-content-end align-items-center">
                                <div class="col-xl-6 col-md-5">
                                    <div class="banner_img text-center">
                                        <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                            <img data-parallax='{"y": -30, "smoothness": 20}'
                                                src="{{ asset('assets/images/banner_img1.png') }}" alt="image" />
                                        </div>
                                        <div class="circle_bg1">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-7">
                                    <div class="banner_content animation" data-animation="zoomIn"
                                        data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                        <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">
                                            Welcome to Yoga Studio</h2>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Yoga has
                                            always been something more, than just a workout routine. It's always been more
                                            of a philosophy, a lifestyle for a mind & body balance. </p>
                                        <a class="btn btn-default rounded-0 animation" href="#"
                                            data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                        <a class="btn btn-white rounded-0 animation" href="#"
                                            data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner_shape">
                        <div class="shape1">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img src="{{ asset('assets/images/slider_pattern1.png') }}" alt="image" />
                            </div>
                        </div>
                        <div class="shape2">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img src="{{ asset('assets/images/slider_pattern2.png') }}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg_light_yellow">
                    <div class="banner_slide_content">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-5">
                                    <div class="banner_img2 text-center">
                                        <div class="animation border_img" data-animation="fadeInRight"
                                            data-animation-delay="0.5s">
                                            <img data-parallax='{"y": -30, "smoothness": 20}'
                                                src="{{ asset('assets/images/banner_img2.png') }}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 order-md-first">
                                    <div class="banner_content animation" data-animation="fadeIn"
                                        data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                        <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">Find
                                            lifestyle to the yoga </h2>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Through
                                            and through we were trying to make our Yoga studio a peaceful, meditational
                                            place of tranquility, which according to our ever-growing list of attendees
                                            we've succeeded at.</p>
                                        <a class="btn btn-default rounded-0 animation" href="#"
                                            data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                        <a class="btn btn-white rounded-0 animation" href="#"
                                            data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner_shape">
                        <div class="shape3">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img src="{{ asset('assets/images/slider_pattern3.png') }}" alt="image" />
                            </div>
                        </div>
                        <div class="shape4">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img src="{{ asset('assets/images/slider_pattern4.png') }}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg_light_gold">
                    <div class="banner_slide_content">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-5">
                                    <div class="banner_img3 text-center">
                                        <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                                            <img data-parallax='{"y": -30, "smoothness": 20}'
                                                src="{{ asset('assets/images/banner_img3.png') }}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 order-md-first">
                                    <div class="banner_content animation" data-animation="fadeIn"
                                        data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                        <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">
                                            Yoga Studio for Everyone</h2>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Our
                                            Yoga studio has become one of the most popular yoga venues in USA. It is time to
                                            go beyond your limits and discover your passion. </p>
                                        <a class="btn btn-default rounded-0 animation" href="#"
                                            data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                        <a class="btn btn-white rounded-0 animation" href="#"
                                            data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner_shape">
                        <div class="shape5">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img src="{{ asset('assets/images/slider_pattern5.png') }}" alt="image" />
                            </div>
                        </div>
                        <div class="shape6">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img data-parallax='{"y": 30, "smoothness": 20}'
                                    src="{{ asset('assets/images/slider_pattern6.png') }}" alt="image" />
                            </div>
                        </div>
                        <div class="shape7">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img data-parallax='{"y": -30, "smoothness": 20}'
                                    src="{{ asset('assets/images/slider_pattern7.png') }}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_nav">
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i
                        class="fa-solid fa-angle-left"></i></a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i
                        class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION BANNER --> --}}

    {{-- <!-- START SECTION BENIFIT --> --}}
    <section class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">What we do</span>
                        <h2>Benifits of Yoga</h2>
                    </div>
                    <p>Contrary to popular belief Lorem is not simply random text. It has roots in adipiscing ncididunt
                        piece of classical literature</p>
                    <div class="small_divider clearfix"></div>
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
                            <h5>Strong Body life</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
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
                            <h5>increased flexibility</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
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
                            <h5>healthy lifestyle</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/blood-flow.png') }}" width="35" height="35"
                                alt="blood-flow">
                        </div>
                        <div class="intro_desc">
                            <h5>Increases blood flow </h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
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
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.4s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/adrenal-gland.png') }}" width="35" height="35"
                                alt="adrenal-gland">
                        </div>
                        <div class="intro_desc">
                            <h5>Regulates adrenal gland</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION BENIFIT --> --}}

    {{-- <!-- START SECTION ABOUT --> --}}
    <section class="bg_gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
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
                <div class="col-md-6">
                    <div class="about_img animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <img data-parallax='{"y": -30, "smoothness": 20}'
                            src="{{ asset('assets/images/about_img.png') }}" alt="about_img" />
                    </div>
                </div>
            </div>
        </div>
        <div class="shape_img">
            <div class="ol_shape1">
                <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                    <img src="{{ asset('assets/images/shape1.png') }}" alt="image" />
                </div>
            </div>
            <div class="ol_shape2">
                <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                    <img src="{{ asset('assets/images/shape2.png') }}" alt="image" />
                </div>
            </div>
            <div class="ol_shape3">
                <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                    <img src="{{ asset('assets/images/shape3.png') }}" alt="image" />
                </div>
            </div>
            <div class="ol_shape4">
                <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                    <img src="{{ asset('assets/images/shape4.png') }}" alt="image" />
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION ABOUT --> --}}

    {{-- <!-- START SECTION CLASSES --> --}}
    <section class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">Choose Your Level Best</span>
                        <h2>Some Of Our Classes</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="classes_img">
                            <img src="{{ asset('assets/images/classes_img1.jpg') }}" alt="image" />
                            <div class="link_container">
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="classes_info">
                            <div class="classes_teacher">
                                <img src="{{ asset('assets/images/cl_teacher_img1.jpg') }}" alt="image" />
                                <span>Maria</span>
                            </div>
                            <div class="classes_title">
                                <span class="badge badge-pill badge-info">Hatha</span>
                                <h4><a href="#">Yoga For Beginners</a></h4>
                            </div>
                            <ul class="classes_schedule">
                                <li><i class="far fa-calendar"></i>Mon, Thu, Fri</li>
                                <li><i class="far fa-clock"></i>9:00 - 11:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="classes_img">
                            <img src="{{ asset('assets/images/classes_img2.jpg') }}" alt="image" />
                            <div class="link_container">
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="classes_info">
                            <div class="classes_teacher">
                                <img src="{{ asset('assets/images/cl_teacher_img2.jpg') }}" alt="image" />
                                <span>Elena</span>
                            </div>
                            <div class="classes_title">
                                <span class="badge badge-pill badge-success">Kundalini</span>
                                <h4><a href="#">Balance Body & Mind</a></h4>
                            </div>
                            <ul class="classes_schedule">
                                <li><i class="far fa-calendar"></i>Tue, Wed, Sat</li>
                                <li><i class="far fa-clock"></i>9:00 - 11:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="classes_img">
                            <img src="{{ asset('assets/images/classes_img3.jpg') }}" alt="image" />
                            <div class="link_container">
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="classes_info">
                            <div class="classes_teacher">
                                <img src="{{ asset('assets/images/cl_teacher_img3.jpg') }}" alt="image" />
                                <span>Regina</span>
                            </div>
                            <div class="classes_title">
                                <span class="badge badge-pill badge-danger">Pilates</span>
                                <h4><a href="#">Increased Flexibility</a></h4>
                            </div>
                            <ul class="classes_schedule">
                                <li><i class="far fa-calendar"></i>Mon, Thu, Fri</li>
                                <li><i class="far fa-clock"></i>11:00 - 12:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="classes_img">
                            <img src="{{ asset('assets/images/classes_img4.jpg') }}" alt="image" />
                            <div class="link_container">
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="classes_info">
                            <div class="classes_teacher">
                                <img src="{{ asset('assets/images/cl_teacher_img4.jpg') }}" alt="image" />
                                <span>Dayna</span>
                            </div>
                            <div class="classes_title">
                                <span class="badge badge-pill badge-success">vinyasa</span>
                                <h4><a href="#">Improves Body Posture</a></h4>
                            </div>
                            <ul class="classes_schedule">
                                <li><i class="far fa-calendar"></i>Tue, Wed, Fri</li>
                                <li><i class="far fa-clock"></i>12:00 - 01:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="classes_img">
                            <img src="{{ asset('assets/images/classes_img5.jpg') }}" alt="image" />
                            <div class="link_container">
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="classes_info">
                            <div class="classes_teacher">
                                <img src="{{ asset('assets/images/cl_teacher_img1.jpg') }}" alt="image" />
                                <span>Maria</span>
                            </div>
                            <div class="classes_title">
                                <span class="badge badge-pill badge-danger">Alignment</span>
                                <h4><a href="#">Better Energy Flow</a></h4>
                            </div>
                            <ul class="classes_schedule">
                                <li><i class="far fa-calendar"></i>Mon, Thu, Fri</li>
                                <li><i class="far fa-clock"></i>11:00 - 12:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="classes_img">
                            <img src="{{ asset('assets/images/classes_img6.jpg') }}" alt="image" />
                            <div class="link_container">
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="classes_info">
                            <div class="classes_teacher">
                                <img src="{{ asset('assets/images/cl_teacher_img2.jpg') }}" alt="image" />
                                <span>Elena</span>
                            </div>
                            <div class="classes_title">
                                <span class="badge badge-pill badge-info">Yoga Dance</span>
                                <h4><a href="#">Increased body awareness</a></h4>
                            </div>
                            <ul class="classes_schedule">
                                <li><i class="far fa-calendar"></i>Mon, Thu, Fri</li>
                                <li><i class="far fa-clock"></i>9:00 - 11:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION CLASSES --> --}}

    {{-- <!-- START SECTION CALL TO ACTION --> --}}
    <section class="bg_light_pink">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-6 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <h2>Get <span class="text_default">25%</span> Discount for all Classes</h2>
                    </div>
                    <p>Lorem ipsum dolor amet consectetur adipiscing elit. Phasellus blandit massa enim.</p>
                    <a href="#" class="btn btn-default rounded-0 mt-md-2">Join Now</a>
                </div>
            </div>
        </div>
        <div class="shape_img">
            <div class="ol_shape5">
                <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                    <img src="{{ asset('assets/images/shape5.png') }}" alt="image" />
                </div>
            </div>
            <div class="ol_shape6">
                <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                    <img src="{{ asset('assets/images/shape6.png') }}" alt="image" />
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION CALL TO ACTION --> --}}

    {{-- <!-- START SECTION CLASSES TIMETABLE --> --}}
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">Choose Your timing Schedule</span>
                        <h2>Our Classes Timetable</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                    <div class="xs_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="classes_filter animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <li><a href="#" class="current" data-filter="all">All Classes</a></li>
                        <li><a href="#" data-filter="hatha">Hatha</a></li>
                        <li><a href="#" data-filter="kundalini">Kundalini</a></li>
                        <li><a href="#" data-filter="pilates">Pilates</a></li>
                        <li><a href="#" data-filter="alignment">Alignment</a></li>
                        <li><a href="#" data-filter="yoga-dance">Yoga Dance</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="schedule_table box_shadow1 table-responsive animation" data-animation="fadeInUp"
                        data-animation-delay="0.3s">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <td>Time</td>
                                    <td>Monday</td>
                                    <td>Tuesday</td>
                                    <td>Wednesday</td>
                                    <td>Thursday</td>
                                    <td>Friday</td>
                                    <td>Saturday</td>
                                    <td>Sunday</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9:00AM</td>
                                    <td>
                                        <div data-classes-schedule="hatha">
                                            <div class="classes_title">
                                                <h6>Hatha Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div data-classes-schedule="kundalini">
                                            <div class="classes_title">
                                                <h6>Kundalini Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="alignment">
                                            <div class="classes_title">
                                                <h6>Alignment Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>10:00AM</td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="alignment">
                                            <div class="classes_title">
                                                <h6>Alignment Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="yoga-dance">
                                            <div class="classes_title">
                                                <h6>Yoga Dance</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div data-classes-schedule="kundalini">
                                            <div class="classes_title">
                                                <h6>Kundalini Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="hatha">
                                            <div class="classes_title">
                                                <h6>Hatha Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="yoga-dance">
                                            <div class="classes_title">
                                                <h6>Yoga Dance</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11:00AM</td>
                                    <td>
                                        <div data-classes-schedule="hatha">
                                            <div class="classes_title">
                                                <h6>Hatha Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="alignment">
                                            <div class="classes_title">
                                                <h6>Alignment Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="yoga-dance">
                                            <div class="classes_title">
                                                <h6>Yoga Dance</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="kundalini">
                                            <div class="classes_title">
                                                <h6>Kundalini Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp; </td>
                                </tr>
                                <tr>
                                    <td>12:00AM</td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="kundalini">
                                            <div class="classes_title">
                                                <h6>Kundalini Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="hatha">
                                            <div class="classes_title">
                                                <h6>Hatha Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="alignment">
                                            <div class="classes_title">
                                                <h6>Alignment Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="yoga-dance">
                                            <div class="classes_title">
                                                <h6>Yoga Dance</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION CLASSES TIMETABLE --> --}}

    {{-- <!-- START SECTION PRICING TABLE --> --}}
    <section class="bg_light_yellow pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">Choose Our Package</span>
                        <h2>Yoga Pricing Plan</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s">
                        <div class="pr_title_wrap border-bottom">
                            <h4 class="pr_title">regular member</h4>
                            <div class="price_tage">
                                <h2>$49<span>/ Month</span></h2>
                            </div>
                        </div>
                        <div class="pr_content pt-3">
                            <ul class="list_none pr_list">
                                <li>Basic Options</li>
                                <li>Full Access</li>
                                <li>Customers Support</li>
                                <li>Free Updates</li>
                                <li>Advanced Options</li>
                            </ul>
                        </div>
                        <div class="pr_footer">
                            <a href="#" class="btn btn-dark rounded-0">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.3s">
                        <div class="pricing_ribbon">Popular</div>
                        <div class="pr_title_wrap bg_default text_white">
                            <h4 class="pr_title">V.i.p Member</h4>
                            <div class="price_tage">
                                <h2>$99<span>/ Month</span></h2>
                            </div>
                        </div>
                        <div class="pr_content pt-3">
                            <ul class="list_none pr_list">
                                <li>Standard Options</li>
                                <li>Full Access</li>
                                <li>Customers Support</li>
                                <li>Free Updates</li>
                                <li>Advanced Options</li>
                            </ul>
                        </div>
                        <div class="pr_footer">
                            <a href="#" class="btn btn-default rounded-0">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.4s">
                        <div class="pr_title_wrap border-bottom">
                            <h4 class="pr_title">Premium Member</h4>
                            <div class="price_tage">
                                <h2>$199<span>/ Month</span></h2>
                            </div>
                        </div>
                        <div class="pr_content pt-3">
                            <ul class="list_none pr_list">
                                <li>Unlimited Options</li>
                                <li>Full Access</li>
                                <li>Customers Support</li>
                                <li>Free Updates</li>
                                <li>Advanced Options</li>
                            </ul>
                        </div>
                        <div class="pr_footer">
                            <a href="#" class="btn btn-dark rounded-0">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape_img">
            <div class="ol_shape8">
                <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                    <img src="{{ asset('assets/images/shape8.png') }}" alt="image" />
                </div>
            </div>
            <div class="ol_shape9">
                <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                    <img src="{{ asset('assets/images/shape9.png') }}" alt="image" />
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION PRICING TABLE --> --}}

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

    {{-- <!-- START SECTION BLOG --> --}}
    <section class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <span class="sub_heading">Our Letest Articles</span>
                        <h2>From Our Blog & News</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog_small_img1.jpg') }}" alt="blog_small_img1">
                            </a>
                        </div>
                        <div class="blog_content">
                            <h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><img src="{{ asset('assets/images/cl_teacher_img1.jpg') }}"
                                            alt="image"><span>Dayna</span></a></li>
                                <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                            </ul>
                            <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use
                                dolor sit enim passage of Lorem Ipsum.</p>
                            <a href="#" class="blog_link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog_small_img2.jpg')}}" alt="blog_small_img2">
                            </a>
                        </div>
                        <div class="blog_content">
                            <h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><img src="{{ asset('assets/images/cl_teacher_img3.jpg') }}"
                                            alt="image"><span>Dayna</span></a></li>
                                <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                            </ul>
                            <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use
                                dolor sit enim passage of Lorem Ipsum.</p>
                            <a href="#" class="blog_link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog_small_img3.jpg') }}" alt="blog_small_img3">
                            </a>
                        </div>
                        <div class="blog_content">
                            <h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><img src="{{ asset('assets/images/cl_teacher_img4.jpg') }}"
                                            alt="image"><span>Dayna</span></a></li>
                                <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                            </ul>
                            <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use
                                dolor sit enim passage of Lorem Ipsum.</p>
                            <a href="#" class="blog_link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION BLOG --> --}}
@endsection
