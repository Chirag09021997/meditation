@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="bg_light_pink breadcrumb_section">
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
                    <!-- <div class="col-lg-12 col-md-6">
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
                    </div> -->

                    <div class="col-lg-12 col-md-6">
                        <div class="border-event mb-5">
                            <a href="/events/{{$event->id}}" style="display:contents">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ $event->thumb_image }}" alt="{{ $event->name }}" class="img-evt" />
                                        <!-- <img  class="img-evt" src="https://tejas.codeshopstudio.com/storage/uploads/event/1732810956_Screenshot_20220910-203023_Google.jpg" alt="{{ $event->name }}" /> -->
                                    </div>
                                    <div class="d-none d-md-block  col-md-8 pl-4 pb-2 pt-4 pb-2">
                                        <div class="row">
                                            <div class="col-md-10 pl-0">
                                                <h5 class="font-weight-bold">{{ $event->name }}</h5>
                                                <div class="description relative cursor-pointer text-muted">
                                                    If you want to reach your ultimate peak health, then this workshop is for you. Learn 7 revolutionary habits over a span of 21 days!                            			</div><br>
                                            </div>
                                        </div>
                                        <div class="row  pl-3 pb-4 pr-3">
                                            <div class="col-md-12 pl-0" style="" id="workshop_detail_view">
                                                <div class="row">
                                                    <div class="col-md-9 pl-0" >
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3  pl-1 pb-0 pr-0 pt-0 m-0 border-right">
                                                                <div class="row align-items-center p-0 m-0">
                                                                    <div class="col-sm-4 p-0 m-0 align-items-center">
                                                                        <img class="text-muted float-right img-event" loading="lazy" src="{{ asset('assets/images/start_date.png') }}" alt="Global">
                                                                    </div>
                                                                    <div class="col-sm-8 pt-0 pl-2 m-0 pr-0">
                                                                        <span class="text-muted" style=""><b>Start Date</b></span><br>
                                                                        <span class="text-muted" style=""> {{ $event->formatted_date }}<br></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3  pl-1 pb-0 pr-0 pt-0 m-0 border-right">
                                                            <div class="row align-items-center p-0 m-0">
                                                                    <div class="col-sm-4 p-0 m-0 align-items-center">
                                                                        <img class="text-muted float-right img-event" loading="lazy" src="{{ asset('assets/images/Duration.png') }}" alt="Global">
                                                                    </div>
                                                                    <div class="col-sm-8 pt-0 pl-2 m-0 pr-0">
                                                                        <span class="text-muted" style=" "><b>Duration</b></span><br>
                                                                        <span class="text-muted" style=" "> 21 Days</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3  pl-1 pb-0 pr-0 pt-0 m-0 border-right">
                                                            <div class="row align-items-center p-0 m-0">
                                                                    <div class="col-sm-4 p-0 m-0 align-items-center">
                                                                        <img class="text-muted float-right img-event" loading="lazy" src="{{ asset('assets/images/time.png') }}" alt="Global">
                                                                    </div>
                                                                    <div class="col-sm-8 pt-0 pl-2 m-0 pr-0">
                                                                        <span class="text-muted" style=" "><b>Timing</b></span><br>
                                                                        <span class="text-muted" style=" "> {{ $event->formatted_time }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3  pl-1 pb-0 pr-0 pt-0 m-0">
                                                                <div class="row align-items-center  p-0 m-0">
                                                                    <div class="col-sm-4 p-0 m-0 align-items-center">
                                                                        <img class="text-muted float-right img-event" loading="lazy" src="{{ asset('assets/images/language.png') }}" alt="Global">
                                                                </div>
                                                                    <div class="col-sm-8 pt-0 pl-2 m-0 pr-0">
                                                                        <span class="text-muted" style=" "><b>Language</b></span><br>
                                                                        <span class="text-muted" style=" "> English</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4  p-0 m-0"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 m-0 ">
                                                        <div class="row p-0 m-0">
                                                            <span class="workshop_btn btn p-0 m-0 position-absolute fixed-bottom text-right pr-3">
                                                                <a class="register_event" href="{{route('events.single', $event->id)}}"><strong>Register Now </strong></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-block d-md-none w-details col-md-6 p-3 mr-3 d-flex">
                                        <div class="text-left ml-32 w-100">
                                            <div class="flex flex-row justify-content-start">
                                                <h5 class="font-weight-bold ml-3">{{ $event->name }}</h5>
                                                <span class="text-muted" style="font-family: Nunito;">
                                                    <img class="text-muted float-left img-event" loading="lazy" src="{{ asset('assets/images/start_date.png') }}" alt="Global">
                                                    <b> Dates:</b>  <!-- 20th Jan - 26th Jan -->
                                                    {{ $event->formatted_date }}
                                                </span><br>
                                                <div class="pt-1">
                                                <span class="text-muted" style="font-family: Nunito;">
                                                    <img class="text-muted float-left img-event" loading="lazy" src="{{ asset('assets/images/Duration.png') }}" alt="Global">
                                                    <b>Duration:</b>  7 Days
                                                </span><br>
                                                </div>
                                                <div class="pt-1">
                                                <span class="text-muted" style="font-family: Nunito;">
                                                    <img class="text-muted float-left img-event" loading="lazy" src="{{ asset('assets/images/time.png') }}" alt="Global">
                                                    <b>Timing:</b>  <!-- 8 - 9:15 pm -->
                                                    {{ $event->formatted_time }}
                                                </div>
                                                <div class="pt-1">
                                                <span class="text-muted" style="font-family: Nunito;">
                                                    <img class="text-muted float-left img-event" loading="lazy" src="{{ asset('assets/images/language.png') }}" alt="Global">
                                                    <b>Language:</b>  English
                                                </span><br>
                                                </div>
                                                <div class="relative cursor-pointer text-muted mt-3">
                                                    Learn 9 steps to heal your chronic lifestyle diseases following the Satvic Healing Plan.
                                                </div>
                                            </div><hr>
                                            <div class="row pb-0">
                                                <div class="col text-right">
                                                    <span class=""><a class="register_event" target="_blank" href="#"><strong>Register Now </strong></a></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
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
