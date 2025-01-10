@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="bg_light_pink breadcrumb_section}}">
        <div class="abt-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title space">
                        <h1>Events</h1>
                    </div>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION EVENTS -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6">
                        <div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp"
                            data-animation-delay="0.2s">
                            <div class="event_img">
                                <a href="{{ route('events.single', $event->id) }}">
                                    <img src="{{ $event->thumb_image }}" alt="{{ $event->name }}" />
                                </a>
                                <div class="event_date">
                                    <h5>{{ $event->formatted_date }}</h5>
                                </div>
                            </div>
                            <div class="event_info">
                                <h5 class="event_title">{{ $event->name }}</h5>
                                <ul class="list_none event_meta">
                                    <li><i class="fa-regular fa-clock"></i>{{ $event->formatted_time }}</li>
                                    <li><i class="fa-solid fa-location-pin"></i>{{ $event->location }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 mt-3 mt-lg-4">
                    <div class="pagination justify-content-center">
                        @if ($events->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $events->previousPageUrl() }}" tabindex="-1">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </a>
                            </li>
                        @endif

                        @php
                            $start = max(1, $events->currentPage() - 2);
                            $end = min($start + 4, $events->lastPage());
                            if ($events->lastPage() - $events->currentPage() < 2) {
                                $start = max(1, $events->lastPage() - 4);
                            }
                        @endphp

                        @for ($page = $start; $page <= $end; $page++)
                            <li class="page-item {{ $page == $events->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $events->url($page) }}">{{ $page }}</a>
                            </li>
                        @endfor

                        @if ($events->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $events->nextPageUrl() }}">
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
    <!-- END SECTION EVENTS -->
@endsection
