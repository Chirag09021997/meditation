@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BREADCRUMB --> --}}
    <section class="bg_light_pink breadcrumb_section">
        <div class="abt-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>{{ $slider->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION BREADCRUMB --> --}}

    {{-- <!-- START SECTION ABOUT --> --}}
    <section>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    {{-- <div class="heading_s1">
                        <h2>Better life with Delta Circle</h2>
                    </div> --}}
                    {!! $slider->description !!}
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION ABOUT --> --}}
@endsection
