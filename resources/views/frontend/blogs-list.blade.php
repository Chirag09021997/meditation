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
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
                @foreach ($blogs as $blog)
                    <div class="col-lg-12 col-md-6">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <a href="{{ route('blogs.single', $blog->id) }}">
                                    <img src="{{ $blog->thumb_image }}" alt="blog_small_img1">
                                </a>
                            </div>
                            <div class="blog_content">
                                <h5 class="blog_title"><a
                                        href="{{ route('blogs.single', $blog->id) }}">{{ $blog->name }}</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><img src="{{ $blog->users?->profile }}"
                                            alt="img"><span>{{ $blog->users?->name }}</span></li>
                                    <li>
                                        <i class="far fa-calendar"></i>{{ $blog->formatted_date }}
                                    </li>
                                    <li><i class="far fa-comments"></i>4</li>
                                </ul>
                                <p>{{ $blog->short_description }}</p>
                                <a href="{{ route('blogs.single', $blog->id) }}" class="blog_link">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
    </section>
    <!-- END SECTION BLOG -->
@endsection
