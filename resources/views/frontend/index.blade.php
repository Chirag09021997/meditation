@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BANNER --> --}}
    <section class="banner_slider banner_slide_half p-0">
        @if (session('success'))
            <script>
                localStorage.removeItem('cart');
                localStorage.removeItem('coupon');
            </script>
        @endif
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active bg_light_pink bg-content">
                    <div class="banner_slide_content">
                        <div class="container">
                            <div class="row justify-content-end align-items-center">
                                <div class="col-xl-6 col-md-5">
                                    <div class="banner_img" data-animation="fadeIn"
                                    data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                        <div>
                                            <img src="{{ asset('assets/images/delta.png') }}" alt="image" />
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-7 ">
                                    <div class="banner_content animation" data-animation="zoomIn"
                                        data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                        <h3 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">
                                        WELCOM TO DELTA CIRCLE MEDITATION</h3>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                            Meditation is a practice that involves focusing the mind to achieve a state of mental clarity,
                                            relaxation, and emotional stability. It has been used for centuries in various cultures and spiritual traditions,
                                            but it has also gained popularity in modern wellness practices for its physical, mental, and emotional benefits.
                                        </p>
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
                                <img src="{{ asset('assets/images/pattern2.svg') }}" alt="image" />
                            </div>
                        </div>
                        <div class="shape2">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img src="{{ asset('assets/images/pattern1.svg') }}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg_light_yellow">
                    <div class="banner_slide_content slider2">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-5">
                                    <div class="banner_img2 text-center">
                                        <!-- <div class="animation border_img" data-animation="fadeInRight"
                                            data-animation-delay="0.5s">
                                            <img data-parallax='{"y": -30, "smoothness": 20}'
                                                src="{{ asset('assets/images/banner_img2.png') }}" alt="image" />
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 order-md-first">
                                    <div class="banner_content animation" data-animation="fadeIn"
                                        data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                        <h3 class="animation mt-7 blue-text" data-animation="fadeInDown" data-animation-delay="0.5s">FIND LIFE STYLE TO THE
                                        <br/> DELTA MEDITATION </h3>
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
                                <img src="{{ asset('assets/images/pattern21.svg') }}" alt="image" />
                            </div>
                        </div>
                        <div class="shape4">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                <img src="{{ asset('assets/images/pattern1.svg') }}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item bg_light_gold">
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
                </div> -->
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
    <section class="pb_70 bg-yoga">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <!-- <span class="sub_heading">What we do</span> -->
                        <h2>Benefit Of Delta Meditaon</h2>
                    </div>
                    <p>Tejas Aura is an online and offline meditaon and spiritual educaon plaorm. We
                        share meditaon and spiritual knowledge in easy-to-understand terms, such that you can
                        actually apply it in your life.
                    </p>
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
                            <h5>Reduces Stress</h5>
                            <p> Meditation helps lower cortisol levels, which are associated with stress. </p>
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
                            <h5>Improves Focus</h5>
                            <p> Regular practice enhances attention and concentration. </p>
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
                            <h5>Increases Self-Awareness</h5>
                            <p> Encourages mindfulness and helps develop a deeper understanding of oneself. </p>
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
                            <h5>Reduces Anxiety </h5>
                            <p> Can decrease symptoms of anxiety and promote emotional stability. </p>
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
                            <h5>Boosts Creativity</h5>
                            <p> Encourages out-of-the-box thinking and problem-solving skills. </p>
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
                            <h5>Enhances Memory</h5>
                            <p> Improves working memory and cognitive clarity. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_shape">
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
            </div>
        </div>
        
    </section>
    {{-- <!-- END SECTION BENIFIT --> --}}

    {{-- <!-- START SECTION ABOUT --> --}}
    <section class="bg_gray bg-yoga">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="heading_s1 ">
                        <!-- <span class="sub_heading">Welcome to Dhyana</span> -->
                        <h2>Better Life With Delta circle </h2>
                    </div>
                    <p> We all get up and go to work but when we are asked why we do we get different answers from each of us but everyone goes to work every day to achieve happiness, peace, prosperity and success . There is a lot of work going on in everyday life. Yet we always feel that we are missing something in life. Happiness, peace, prosperity and success are not enough for us in life. Delta Circle helps our life to fill this void. </p>
                    <p>The question we get here is what is a delta circle? The Delta Circle is a source of happiness, peace, prosperity and success. Which serves to give direction to our lives. The seven layers of the delta circle are the task of evaluating our life and giving the right direction to be happy.</p>
                    <p><b>Who can use Delta Circle?</b></p>
                    <p>Delta Circle can be helpful to anyone who works from morning to evening with the desire to achieve something in life. Delta Circle Student Jobs, Professional, or Business Everybody should learn and create. Provides guidance on what can be used to accomplish the objectives. Let's try to understand the player.</p>
                    <a href="/delta" class="btn btn-default rounded-0">Read More</a>
                    <div class="mt-3">
                        <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                            <img src="{{ asset('assets/images/group1.svg') }}" alt="image" class="ml-4"/>
                            <img src="{{ asset('assets/images/group2.svg') }}" alt="image" class="ml-4"/>
                            <img src="{{ asset('assets/images/group3.svg') }}" alt="image" class="ml-4" />
                            <img src="{{ asset('assets/images/group4.svg') }}" alt="image" class="ml-4" />
                            <img src="{{ asset('assets/images/group5.svg') }}" alt="image" class="ml-4"/>
                            <img src="{{ asset('assets/images/group6.svg') }}" alt="image" class="ml-4"/>
                            <img src="{{ asset('assets/images/group7.svg') }}" alt="image" class="ml-4"/>

                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="about_img animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <img data-parallax='{"y": -30, "smoothness": 20}'
                            src="{{ asset('assets/images/about_img.png') }}" alt="about_img" />
                    </div>
                </div> -->
            </div>
        </div>
        <div class="banner_shape">
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
            </div>
        <!-- <div class="shape_img">
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
        </div> -->
    </section>
    {{-- <!-- END SECTION ABOUT --> --}}

    {{-- <!-- START SECTION CLASSES --> --}}
    <!-- <section class="pb_70">
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
    </section> -->
    <section class="bg_gray ess-sect">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="heading_s1 ">
                        <!-- <span class="sub_heading">Welcome to Dhyana</span> -->
                        <h2>Essenals for everyday life </h2>
                    </div>
                    <p> A joyful and peaceful life from the experience of our life. Due to which the productivity and success in every work of life increased, he made it the principal of life and decided to work on it for people.
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
                                <p> Unnecessary thoughts reduce the productivity of human life, so teach a method for managing thoughts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-6"></div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                            data-animation-delay="0.2s">
                            <div class="box_icon">
                                <img src="{{ asset('assets/images/blood-flow.png') }}" width="35" height="35"
                                    alt="blood-flow">
                            </div>
                            <div class="intro_desc">
                                <h5>Energy </h5>
                                <p> Understanding and awareness of inner energy is helpful in making life successful so act on inner energy and spread it. </p>
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
        <div class="banner_shape">
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
    <!-- <section>
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
    </section> -->
    {{-- <!-- END SECTION CLASSES TIMETABLE --> --}}

    {{-- <!-- START SECTION PRICING TABLE --> --}}
    <section class="bg_light_yellow pb_0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <!-- <span class="sub_heading">We are available on</span> -->
                        <h2>We are available on</h2>
                    </div>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                    <div class="small_divider clearfix"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/images/phone.png') }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <h2>Get Mobile Application & Do Yoga Online!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim.</p>
                            <h5>BeYoga Application</h5>
                            <button class="btn btn-dark app-button apple-btn "><i class="fa-apple-pay fa-2x"></i><span class="text-uppercase ml-2">Apple store</span></button>
                            <button class="btn btn-dark app-button play-btn"><i class="fa fa-play fa-2x"></i><span class="text-uppercase ml-2">Google store</span></button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
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
            </div> -->
        </div>
        <!-- <div class="shape_img">
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
        </div> -->
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
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="team_bor">
                            <div class="team_img">
                                <img src="{{ asset('assets/images/team1.jpg') }}" alt="team1">
                                <ul class="list_none social_icons social_style1 rounded_social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
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
                    <div class="team_bor">
                        <div class="team_img">
                            <img src="{{ asset('assets/images/team2.jpg') }}" alt="team2">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5><a href="#">Grace Wong</a></h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="team_bor">
                            <div class="team_img">
                                <img src="{{ asset('assets/images/team3.jpg') }}" alt="team3">
                                <ul class="list_none social_icons social_style1 rounded_social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5><a href="#">Maria Redwood</a></h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <div class="team_bor">
                            <div class="team_img">
                                <img src="{{ asset('assets/images/team4.jpg') }}" alt="team4">
                                <ul class="list_none social_icons social_style1 rounded_social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5><a href="#">Merry Walter</a></h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div> -->
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
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog_post box_shadow4 animation" data-animation="fadeInUp"
                            data-animation-delay="0.3s">
                            <div class="blog_img">
                                <a href="{{ route('blogs.single', $blog->id) }}">
                                    <img src="{{ $blog->thumb_image }}" alt="blog">
                                </a>
                            </div>
                            <div class="blog_content">
                                <h5 class="blog_title"><a
                                        href="{{ route('blogs.single', $blog->id) }}">{{ $blog->name }}</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><img src="{{ asset('assets/images/cl_teacher_img1.jpg') }}"
                                            alt="image"><span>Dayna</span></li>
                                    <li>
                                        <i class="far fa-calendar"></i>{{ $blog->formatted_date }}
                                    </li>
                                </ul>
                                <p>{{ $blog->short_description }}</p>
                                <a href="{{ route('blogs.single', $blog->id) }}" class="blog_link">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION BLOG --> --}}
@endsection
