@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="bg_light_pink breadcrumb_section">
        <div class="abt-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>Blogs</h1>
                        </div>
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
                <div class="col-lg-9">
                    <div class="blog_list">
                        <div class="row">
                            @foreach ($blogs as $blog)
                                <div class="col-12">
                                    <div class="blog_post box_shadow4">
                                        <div class="blog_img">
                                            <a href="{{ route('blogs.single', $blog->id) }}">
                                                <img src="{{ $blog->thumb_image }}" alt="{{ $blog->name }}">
                                            </a>
                                        </div>
                                        <div class="blog_content">
                                            <h4 class="blog_title"><a
                                                    href="{{ route('blogs.single', $blog->id) }}">{{ $blog->name }}</a>
                                            </h4>
                                            <ul class="list_none blog_meta">
                                                <li><a href="{{ route('blogs.single', $blog->id) }}">
                                                        <img src="{{ $blog->users?->profile }}"
                                                            alt="image"><span>{{ $blog->users?->name }}</span></a></li>
                                                <li><a href="{{ route('blogs.single', $blog->id) }}"><i
                                                            class="far fa-calendar"></i>{{ $blog->formatted_date }}</a>
                                                </li>
                                                <li><a href="{{ route('blogs.single', $blog->id) }}"><i
                                                            class="far fa-comments"></i>4</a></li>
                                            </ul>
                                            <p>{{ $blog->short_description }}</p>
                                            <a href="{{ route('blogs.single', $blog->id) }}" class="blog_link">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3 mt-lg-4">
                            <div class="pagination justify-content-center">
                                @if ($blogs->onFirstPage())
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blogs->previousPageUrl() }}" tabindex="-1">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </a>
                                    </li>
                                @endif

                                @php
                                    $start = max(1, $blogs->currentPage() - 2);
                                    $end = min($start + 4, $blogs->lastPage());
                                    if ($blogs->lastPage() - $blogs->currentPage() < 2) {
                                        $start = max(1, $blogs->lastPage() - 4);
                                    }
                                @endphp

                                @for ($page = $start; $page <= $end; $page++)
                                    <li class="page-item {{ $page == $blogs->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $blogs->url($page) }}">{{ $page }}</a>
                                    </li>
                                @endfor

                                @if ($blogs->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blogs->nextPageUrl() }}">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </li>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
                    <div class="sidebar">
                        <a href="{{ route('blogs') }}">
                            <h5 class="widget_title">Categories</h5>
                        </a>
                        <div class="widget widget_categories">
                            <ul class="border_bottom_dash">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('blogs', ['category_id' => $category->id]) }}">
                                            <span class="categories_name">{{ $category->name }}</span>
                                            <span class="categories_num">({{ $category->blog_count }})</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_tags">
                            <h5 class="widget_title">tags</h5>
                            <div class="tags">
                                <a href="#">Gym</a>
                                <a href="#">Fitness</a>
                                <a href="#">Cardio</a>
                                <a href="#">Cycling</a>
                                <a href="#">Workout</a>
                            </div>
                        </div>
                        <div class="widget widget_instagram">
                            <h5 class="widget_title">Instagram Feeds</h5>
                            <ul class="list_none instafeed">
                                <li><a href="#">
                                        <img src="{{ asset('assets/images/insta_img1.jpg') }}" alt="insta_img">
                                        <span class="insta_icon"><i class="ti-instagram"></i></span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <img src="{{ asset('assets/images/insta_img2.jpg') }}" alt="insta_img">
                                        <span class="insta_icon"><i class="ti-instagram"></i></span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <img src="{{ asset('assets/images/insta_img3.jpg') }}" alt="insta_img">
                                        <span class="insta_icon"><i class="ti-instagram"></i></span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <img src="{{ asset('assets/images/insta_img4.jpg') }}" alt="insta_img">
                                        <span class="insta_icon"><i class="ti-instagram"></i></span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <img src="{{ asset('assets/images/insta_img5.jpg') }}" alt="insta_img">
                                        <span class="insta_icon"><i class="ti-instagram"></i></span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <img src="{{ asset('assets/images/insta_img6.jpg') }}" alt="insta_img">
                                        <span class="insta_icon"><i class="ti-instagram"></i></span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <img src="{{ asset('assets/images/insta_img7.jpg') }}" alt="insta_img">
                                        <span class="insta_icon"><i class="ti-instagram"></i></span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <img src="{{ asset('assets/images/insta_img8.jpg') }}" alt="insta_img">
                                        <span class="insta_icon"><i class="ti-instagram"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection
