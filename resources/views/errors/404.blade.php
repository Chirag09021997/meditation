@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg3.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Page Not Found</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('events') }}">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">404</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION 404 -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="error_txt text_default">404</div>
                    <div class="heading_s2 mb-2">
                        <h5>oops! The page you requested was not found!</h5>
                    </div>
                    <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                    <a href="{{ route('home') }}" class="btn btn-outline-black">Back To Home</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION 404 -->
@endsection
