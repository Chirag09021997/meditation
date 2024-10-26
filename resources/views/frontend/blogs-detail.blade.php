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
                                    <li><img src="{{ asset('assets/images/cl_teacher_img1.jpg') }}"
                                            alt="image"><span>Dayna</span></li>
                                    <li><i class="far fa-calendar"></i>{{ $blog->formatted_date }}</li>
                                    <li><i class="far fa-comments"></i>4</li>
                                </ul>
                                <p>{!! $blog->description !!}</p>

                            </div>
                        </div>
                        <div class="comment-area">
                            <div class="posts-title">
                                <h5>(03) Comments</h5>
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
                                                and demoralized by the charms of pleasure of the moment, so blinded by
                                                desire that the cannot foresee the pain and trouble that.</p>
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
                                                        beguiled and demoralized by the charms of pleasure of the moment, so
                                                        blinded by desire that the cannot foresee the pain and trouble that.
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
                                                    <div class="comment-time">April 15, 2018, 10:30 PM</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="comment-reply">Reply</a>
                                                </div>
                                            </div>
                                            <p>We denounce with righteous indignation and dislike men who are so beguiled
                                                and demoralized by the charms of pleasure of the moment, so blinded by
                                                desire that the cannot foresee the pain and trouble that.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="posts-title">
                                <h5>Write a comment</h5>
                            </div>
                            <form class="field_form icon_form" name="enq" method="post">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div class="form-input">
                                            <span>
                                                <i class="fa-regular fa-comment"></i>
                                            </span>
                                            <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-input">
                                            <span>
                                                <i class="fa-regular fa-user"></i>
                                            </span>
                                            <input required="required" placeholder="Enter Name *" class="form-control"
                                                name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-input">
                                            <span>
                                                <i class="fa-regular fa-envelope"></i>
                                            </span>
                                            <input required="required" placeholder="Enter Email *" class="form-control"
                                                name="email" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-input">
                                            <span>
                                                <i class="fa-solid fa-globe"></i>
                                            </span>
                                            <input name="website" class="form-control" placeholder="Your Website"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-default" name="submit"
                                            value="Submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection
