@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BREADCRUMB --> --}}
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_70"
        data-img-src="assets/images/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>About Us</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us 2</li>
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
                <div class="col-md-6">
                    <div class="bg-white box_shadow4 small_padding animation" data-animation="fadeInRight"
                        data-animation-delay="0.2s">
                        <div class="heading_s3">
                            <h3>Better Life With Perfect Body</h3>
                            <div class="title_icon"><i class="flaticon-lotus"></i></div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.
                            Iipsum dolor sit amet consectetur adipiscing elitllus blandit massa enim.</p>
                        <a href="#" class="btn btn-default btn-radius">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fancy_style1 overlay_bg_30 animation" data-animation="fadeInLeft"
                        data-animation-delay="0.3s">
                        <img src="assets/images/benifits_img1.jpg" alt="benifits_img" />
                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play"><span
                                class="ripple"><i class="ion-play"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION ABOUT --> --}}

    {{-- <!-- START SECTION BENIFIT --> --}}
    <section class="pb_70 bg_gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s3 text-center">
                        <h3>Benifits of Yoga</h3>
                        <div class="title_icon"><i class="flaticon-lotus"></i></div>
                    </div>
                    <p>Contrary to popular belief Lorem is not simply random text. It has roots in adipiscing ncididunt
                        piece of classical literature</p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="box_icon">
                            <i class="flaticon-strong-body"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Strong Body life</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style3 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="box_icon">
                            <i class="flaticon-flexibility"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>increased flexibility</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="box_icon">
                            <i class="flaticon-healthy-lifestyle"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>healthy lifestyle</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="box_icon">
                            <i class="flaticon-blood-flow"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Increases blood flow </h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style3 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="box_icon">
                            <i class="flaticon-drops-blood"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Drops blood pressure</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et
                                dolore magna aliqua enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="box_icon">
                            <i class="flaticon-adrenal-gland"></i>
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

    {{-- <!-- START SECTION PRICING TABLE --> --}}
    <section class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s3 text-center">
                        <h3>Yoga Pricing Plan</h3>
                        <div class="title_icon"><i class="flaticon-lotus"></i></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style2 pt-2 text-center">
                        <ul class="nav nav-tabs sliding_tab animation" role="tablist" data-animation="fadeInUp"
                            data-animation-delay="0.3s">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#Monthly" role="tab"
                                    aria-controls="Monthly" aria-selected="true">Monthly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Yearly" role="tab"
                                    aria-controls="Yearly" aria-selected="false">Yearly</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Monthly" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="pricing_box pricing_style2 background_bg animation"
                                        data-animation="flip_box" data-animation-delay="0.1s"
                                        data-img-src="assets/images/price_img1.jpg">
                                        <div class="pr_title_wrap text_white">
                                            <h4 class="pr_title">regular member</h4>
                                            <div class="price_tage">
                                                <h2>$49<span>/ Month</span></h2>
                                            </div>
                                        </div>
                                        <div class="pr_content text_white pt-3">
                                            <ul class="list_none pr_list">
                                                <li>Basic Options</li>
                                                <li>Full Access</li>
                                                <li>Customers Support</li>
                                                <li>Free Updates</li>
                                                <li>Advanced Options</li>
                                            </ul>
                                        </div>
                                        <div class="pr_footer">
                                            <a href="#" class="btn btn-outline-light btn-radius">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing_box pricing_style2 background_bg animation"
                                        data-animation="flip_box" data-animation-delay="0.2s"
                                        data-img-src="assets/images/price_img2.jpg">
                                        <div class="pricing_ribbon">Popular</div>
                                        <div class="pr_title_wrap text_white">
                                            <h4 class="pr_title">V.i.p Member</h4>
                                            <div class="price_tage">
                                                <h2>$99<span>/ Month</span></h2>
                                            </div>
                                        </div>
                                        <div class="pr_content text_white pt-3">
                                            <ul class="list_none pr_list">
                                                <li>Standard Options</li>
                                                <li>Full Access</li>
                                                <li>Customers Support</li>
                                                <li>Free Updates</li>
                                                <li>Advanced Options</li>
                                            </ul>
                                        </div>
                                        <div class="pr_footer">
                                            <a href="#" class="btn btn-white btn-radius">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing_box pricing_style2 background_bg animation"
                                        data-animation="flip_box" data-animation-delay="0.3s"
                                        data-img-src="assets/images/price_img3.jpg">
                                        <div class="pr_title_wrap text_white">
                                            <h4 class="pr_title">Premium Member</h4>
                                            <div class="price_tage">
                                                <h2>$199<span>/ Month</span></h2>
                                            </div>
                                        </div>
                                        <div class="pr_content text_white pt-3">
                                            <ul class="list_none pr_list">
                                                <li>Unlimited Options</li>
                                                <li>Full Access</li>
                                                <li>Customers Support</li>
                                                <li>Free Updates</li>
                                                <li>Advanced Options</li>
                                            </ul>
                                        </div>
                                        <div class="pr_footer">
                                            <a href="#" class="btn btn-outline-light btn-radius">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Yearly" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="pricing_box pricing_style2 background_bg animation"
                                        data-animation="flip_box" data-animation-delay="0.1s"
                                        data-img-src="assets/images/price_img4.jpg">
                                        <div class="pr_title_wrap text_white">
                                            <h4 class="pr_title">regular member</h4>
                                            <div class="price_tage">
                                                <h2>$99<span>/ Year</span></h2>
                                            </div>
                                        </div>
                                        <div class="pr_content text_white pt-3">
                                            <ul class="list_none pr_list">
                                                <li>Basic Options</li>
                                                <li>Full Access</li>
                                                <li>Customers Support</li>
                                                <li>Free Updates</li>
                                                <li>Advanced Options</li>
                                            </ul>
                                        </div>
                                        <div class="pr_footer">
                                            <a href="#" class="btn btn-outline-light btn-radius">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing_box pricing_style2 background_bg animation"
                                        data-animation="flip_box" data-animation-delay="0.2s"
                                        data-img-src="assets/images/price_img5.jpg">
                                        <div class="pricing_ribbon">Popular</div>
                                        <div class="pr_title_wrap text_white">
                                            <h4 class="pr_title">V.i.p Member</h4>
                                            <div class="price_tage">
                                                <h2>$199<span>/ Year</span></h2>
                                            </div>
                                        </div>
                                        <div class="pr_content text_white pt-3">
                                            <ul class="list_none pr_list">
                                                <li>Standard Options</li>
                                                <li>Full Access</li>
                                                <li>Customers Support</li>
                                                <li>Free Updates</li>
                                                <li>Advanced Options</li>
                                            </ul>
                                        </div>
                                        <div class="pr_footer">
                                            <a href="#" class="btn btn-white btn-radius">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing_box pricing_style2 background_bg animation"
                                        data-animation="flip_box" data-animation-delay="0.3s"
                                        data-img-src="assets/images/price_img6.jpg">
                                        <div class="pr_title_wrap text_white">
                                            <h4 class="pr_title">Premium Member</h4>
                                            <div class="price_tage">
                                                <h2>$299<span>/ Year</span></h2>
                                            </div>
                                        </div>
                                        <div class="pr_content text_white pt-3">
                                            <ul class="list_none pr_list">
                                                <li>Unlimited Options</li>
                                                <li>Full Access</li>
                                                <li>Customers Support</li>
                                                <li>Free Updates</li>
                                                <li>Advanced Options</li>
                                            </ul>
                                        </div>
                                        <div class="pr_footer">
                                            <a href="#" class="btn btn-outline-light btn-radius">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION PRICING TABLE --> --}}

    {{-- <!-- START SECTION TESTIMONIAL --> --}}
    <section class="overlay_bg_60 parallax_bg" data-parallax-bg-image="assets/images/testimonial_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center text_white animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s3 text-center heading_light">
                        <h3>Our Client Say!</h3>
                        <div class="title_icon"><i class="flaticon-lotus"></i></div>
                    </div>
                    <div class="xs_divider clearfix d-none d-md-block"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="testimonial_slider testimonial_section testimonial_style3 text_white carousel_slider owl-carousel owl-theme dots_white nav_transparent_white"
                        data-margin="15" data-nav="true" data-dots="false" data-loop="true" data-autoplay="true"
                        data-items="1" data-center="true" data-autoheight="true">
                        <div class="testimonial_box">
                            <div class="testi_desc">
                                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                    Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing elit ncididunt labore et
                                    dolore magna aliqua enim"</p>
                            </div>
                            <div class="testi_meta">
                                <div class="testimonial_img">
                                    <img src="assets/images/client_img1.jpg" alt="client">
                                </div>
                                <div class="testi_user">
                                    <h5>Merry Walter</h5>
                                    <span class="text-white">Web Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testi_desc">
                                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                    Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing elit ncididunt labore et
                                    dolore magna aliqua enim"</p>
                            </div>
                            <div class="testi_meta">
                                <div class="testimonial_img">
                                    <img src="assets/images/client_img2.jpg" alt="client">
                                </div>
                                <div class="testi_user">
                                    <h5>Elena Mark</h5>
                                    <span class="text-white">Web Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testi_desc">
                                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                    Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing elit ncididunt labore et
                                    dolore magna aliqua enim"</p>
                            </div>
                            <div class="testi_meta">
                                <div class="testimonial_img">
                                    <img src="assets/images/client_img3.jpg" alt="client">
                                </div>
                                <div class="testi_user">
                                    <h5>Calvin William</h5>
                                    <span class="text-white">Web Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testi_desc">
                                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                    Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing elit ncididunt labore et
                                    dolore magna aliqua enim"</p>
                            </div>
                            <div class="testi_meta">
                                <div class="testimonial_img">
                                    <img src="assets/images/client_img4.jpg" alt="client">
                                </div>
                                <div class="testi_user">
                                    <h5>Maria Wolter</h5>
                                    <span class="text-white">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION TESTIMONIAL --> --}}

    {{-- <!-- START SECTION TEACHER --> --}}
    <section class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s3 text-center">
                        <h3>Our Awesome Team</h3>
                        <div class="title_icon"><i class="flaticon-lotus"></i></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                        magna aliqua enim. </p>
                    <div class="xs_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="team_img">
                            <img src="assets/images/team1.jpg" alt="team1">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5>Alea Brooks</h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="team_img">
                            <img src="assets/images/team2.jpg" alt="team2">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5>Alea Brooks</h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="team_img">
                            <img src="assets/images/team3.jpg" alt="team3">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5>Alea Brooks</h5>
                                <span>Yoga Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <div class="team_img">
                            <img src="assets/images/team4.jpg" alt="team4">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>

                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5>Alea Brooks</h5>
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
