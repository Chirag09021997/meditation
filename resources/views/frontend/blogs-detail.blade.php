@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg3.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Blog Single Post</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Single Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION BLOG -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_post">
                        <div class="blog_img">
                            <img src="{{ $blog->thumb_image }}" alt="blog_img">
                        </div>
                        <div class="single_post_content">
                            <div class="blog_text">
                                <h2 class="blog_title">{{ $blog->name }}</h2>
                                <ul class="list_none blog_meta">
                                    <li><img src="{{ isset($blog->users) ? $blog->users->profile : '' }}"
                                            alt="img"><span>{{ isset($blog->users) ? $blog->users->name : '' }}</span>
                                    </li>
                                    <li><i class="far fa-calendar"></i>{{ $blog->formatted_date }}</li>
                                </ul>
                                <p>{!! $blog->description !!}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection
