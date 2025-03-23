@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="bg_light_pink breadcrumb_section">
        <div class="abt-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>Contact Us</h1>
                        </div>
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav> -->
                    </div>
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
                            <a href="tel:{{ $settings['mobile_no'] ?? '' }}">{{ $settings['mobile_no'] ?? '' }}</a>
                        </li>
                        <li>
                            <span class="fa-regular fa-envelope"></span>
                            <a href="mailto:{{ $settings['mail'] ?? '' }}">{{ $settings['mail'] ?? '' }}</a>
                        </li>
                        <li>
                            <span class="fa-solid fa-location-pin"></span>
                            <address>{{ $settings['address'] ?? 'Not Available' }}</address>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-6 mt-4 mt-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="field_form icon_form">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa-regular fa-user"></i>
                                        </span>
                                        <input placeholder="Enter Name *" id="first-name" class="form-control" name="name"
                                            type="text">
                                        @if ($errors->has('name'))
                                            <p class="text-danger font_style1">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa-regular fa-envelope"></i>
                                        </span>
                                        <input required placeholder="Enter Email *" id="email" class="form-control"
                                            name="email" type="email">
                                        @if ($errors->has('email'))
                                            <p class="text-danger font_style1">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa fa-mobile"></i>
                                        </span>
                                        <input placeholder="Enter Mobile No *" id="mobile_no" class="form-control"
                                            name="mobile_no" type="text">
                                        @if ($errors->has('mobile_no'))
                                            <p class="text-danger font_style1">{{ $errors->first('mobile_no') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa-regular fa-folder"></i>
                                        </span>
                                        <input placeholder="Enter Subject" id="subject" class="form-control" name="subject"
                                            type="text">
                                        @if ($errors->has('subject'))
                                            <p class="text-danger font_style1">{{ $errors->first('subject') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="form-input">
                                        <span>
                                            <i class="fa-regular fa-comment"></i>
                                        </span>
                                        <textarea required placeholder="Message *" id="description" class="form-control"
                                            name="message" rows="5"></textarea>
                                        @if ($errors->has('message'))
                                            <p class="text-danger font_style1">{{ $errors->first('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-default">Submit</button>
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
                        @if (isset($settings['map_url']))
                            <iframe src="{{ $settings['map_url'] }}" allowfullscreen=""></iframe>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION MAP -->
@endsection