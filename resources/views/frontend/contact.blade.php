@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg4.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Contact Us</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION CONTACT -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="heading_s2">
                        <span class="sub_heading">Contact Us</span>
                        <h3>Get In touch</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id
                        varius nunc id varius nunc.</p>
                    <ul class="contact_info contact_info_style2 list_none">
                        <li>
                            <span class="fa-solid fa-mobile"></span>
                            <p>+123 456 7890</p>
                        </li>
                        <li>
                            <span class="fa-regular fa-envelope"></span>
                            <a href="mailto:info@yourmail.com">info@yourmail.com</a>
                        </li>
                        <li>
                            <span class="fa-solid fa-location-pin"></span>
                            <address>256 Mohra Rd, North London, UK</address>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-6 mt-4 mt-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="field_form icon_form">
                        <form method="post" name="enq">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa-regular fa-user"></i>
                                        </span>
                                        <input required="required" placeholder="Enter Name *" id="first-name"
                                            class="form-control" name="name" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa-regular fa-envelope"></i>
                                        </span>
                                        <input required="required" placeholder="Enter Email *" id="email"
                                            class="form-control" name="email" type="email">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa-regular fa-folder"></i>
                                        </span>
                                        <input placeholder="Enter Subject" id="subject" class="form-control"
                                            name="subject" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa-regular fa-comment"></i>
                                        </span>
                                        <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message"
                                            rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" title="Submit Your Message!" class="btn btn-default"
                                        id="submitButton" name="submit" value="Submit">Submit</button>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT -->

    <!-- START SECTION MAP -->
    <div class="map_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="contact_map animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION MAP -->
@endsection