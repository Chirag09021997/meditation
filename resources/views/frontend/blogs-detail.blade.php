@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="bg_light_pink breadcrumb_section">
        <div class="abt-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>Blog Detail</h1>
                        </div>
                        <!-- <nav aria-label="breadcrumb">
                                                                                                                                                                                            <ol class="breadcrumb justify-content-center">
                                                                                                                                                                                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                                                                                                                                                                                <li class="breadcrumb-item active" aria-current="page">Events Details</li>
                                                                                                                                                           </ol>
                                                                                                                                                                                        </nav> -->
                    </div>
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
                            <img src="{{ $blog->thumb_image }}" alt="blog_img" height="700" onerror="this.onerror=null;this.src='{{ asset('assets/images/ic_blog_loading.png') }}';" >
                        </div>
                        <div class="single_post_content">
                            <div class="blog_text">
                                <h2 class="blog_title">{{ $blog->name }}</h2>
                                <ul class="list_none blog_meta">
                                    <li><img src="{{ $blog->profile->profile ?? asset('assets/images/cl_teacher_img1.jpg') }}"
                                            alt="img"><span>{{ $blog->profile->name ?? 'N/A' }}</span>
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
