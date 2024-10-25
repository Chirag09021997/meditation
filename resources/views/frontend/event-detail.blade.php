@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg4.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Events Details</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events Details</li>
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
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="single_events">
                        <div class="event_img">
                            <img src="{{ asset('assets/images/breadcrumb_bg3.jpg') }}" alt="breadcrumb_bg3">
                        </div>
                        <div class="events_title">
                            <h2>Yoga Fitness Experience</h2>
                        </div>
                        <div class="event_desc">
                            <p>Lorem Ipsu. is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s when an unknown printer took a
                                galley of type and scrambled it to make
                                a type specimen book. </p>
                            <blockquote>It has survived not only five centuries, but also the leap into electronic
                                typesetting. It was popularised in the release of Letraset sheets containing Lorem passages.
                            </blockquote>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting. It
                                was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="review_content">
                            <div class="content-title">
                                <h5>Reviews</h5>
                            </div>
                            <ul class="list_none comment_list">
                                <li class="comment_info">
                                    <div class="d-flex">
                                        <div class="user_img">
                                            <img src="{{ asset('assets/images/client_img1.jpg') }}" alt="client_img1">
                                        </div>
                                        <div class="comment_content">
                                            <div class="d-flex">
                                                <div class="meta_data">
                                                    <h6><a href="#">Merry Walter</a></h6>
                                                    <div class="comment-time">March 5, 2018, 6:05 PM</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="comment-reply">Reply</a>
                                                </div>
                                            </div>
                                            <p>We denounce with righteous indignation and dislike men who are so beguiled
                                                and demoralized by the charms of pleasure of the moment the pain and trouble
                                                that.</p>
                                        </div>
                                    </div>
                                    <ul class="children_comment">
                                        <li class="comment_info">
                                            <div class="d-flex">
                                                <div class="user_img">
                                                    <img src="{{ asset('assets/images/client_img3.jpg') }}"
                                                        alt="client_img3">
                                                </div>
                                                <div class="comment_content">
                                                    <div class="d-flex">
                                                        <div class="meta_data">
                                                            <h6><a href="#">Alia Noor</a></h6>
                                                            <div class="comment-time">March 5, 2018, 6:05 PM</div>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <a href="#" class="comment-reply">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>We denounce with righteous indignation and dislike men who are so
                                                        beguiled and demoralized by the charms of pleasure of the moment.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment_info">
                                    <div class="d-flex">
                                        <div class="user_img">
                                            <img src="{{ asset('assets/images/client_img2.jpg') }}" alt="client_img2">
                                        </div>
                                        <div class="comment_content">
                                            <div class="d-flex">
                                                <div class="meta_data">
                                                    <h6><a href="#">Jessica Olivia</a></h6>
                                                    <div class="comment-time">april 15, 2018, 10:30 PM</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="comment-reply">Reply</a>
                                                </div>
                                            </div>
                                            <p>We denounce with righteous indignation and dislike men who are so beguiled
                                                and demoralized by the charms of pleasure of the moment and trouble that.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="review_form field_form icon_form">
                                <div class="content-title">
                                    <h5>Add a review</h5>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <div class="form-input">
                                                <span>
                                                    <i class="fa-regular fa-comment"></i>
                                                </span>
                                                <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-input">
                                                <span>
                                                    <i class="fa-regular fa-user"></i>
                                                </span>
                                                <input required="required" placeholder="Enter Name *" class="form-control"
                                                    name="name" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-input">
                                                <span>
                                                    <i class="fa-regular fa-envelope"></i>
                                                </span>
                                                <input required="required" placeholder="Enter Email *" class="form-control"
                                                    name="email" type="email">
                                            </div>
                                        </div>

                                        <div class="form-group col-12">
                                            <button type="submit" class="btn btn-default" name="submit"
                                                value="Submit">Submit Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                            <label>Days: </label>
                                            <span>Mon, Thu, Fri</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_cat">
                                            <label>Time: </label>
                                            <span>9:00 - 11:00</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_cat">
                                            <label>Start Date: </label>
                                            <span>April 14, 2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_student">
                                            <label>Location: </label>
                                            <span>North London</span>
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
                                <div class="items">
                                    <div class="event_box event_box_style1 box_shadow4 animation"
                                        data-animation="fadeInUp" data-animation-delay="0.2s">
                                        <div class="event_img">
                                            <a href="#"><img src="{{ asset('assets/images/event_img1.jpg') }}"
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
                                <div class="items">
                                    <div class="event_box event_box_style1 box_shadow4 animation"
                                        data-animation="fadeInUp" data-animation-delay="0.3s">
                                        <div class="event_img">
                                            <a href="#"><img src="{{ asset('assets/images/event_img2.jpg') }}"
                                                    alt="event_img" /></a>
                                            <div class="event_date">
                                                <h5><span>26</span> Apr</h5>
                                            </div>
                                        </div>
                                        <div class="event_info">
                                            <h5 class="event_title"><a href="#">Hatha Yoga Training Festival</a>
                                            </h5>
                                            <ul class="list_none event_meta">
                                                <li><i class="fa-regular fa-clock"></i>9:00 - 4:00</li>
                                                <li><i class="fa-solid fa-location-pin"></i>New York City</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="event_box event_box_style1 box_shadow4 animation"
                                        data-animation="fadeInUp" data-animation-delay="0.4s">
                                        <div class="event_img">
                                            <a href="#"><img src="{{ asset('assets/images/event_img3.jpg') }}"
                                                    alt="event_img" /></a>
                                            <div class="event_date">
                                                <h5><span>28</span> Apr</h5>
                                            </div>
                                        </div>
                                        <div class="event_info">
                                            <h5 class="event_title"><a href="#">Hatha Yoga Training Festival</a>
                                            </h5>
                                            <ul class="list_none event_meta">
                                                <li><i class="fa-regular fa-clock"></i>9:00 - 4:00</li>
                                                <li><i class="fa-solid fa-location-pin"></i>New York City</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Social Share</h5>
                            <ul class="list_none social_icons">
                                <li><a href="#" class="sc_facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="sc_twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="sc_twitter"><i class="fa-brands fa-google-plus-g"></i></a>
                                </li>
                                <li><a href="#" class="sc_facebook"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#" class="sc_instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION EVENTS -->
@endsection
