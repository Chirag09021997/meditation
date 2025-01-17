@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BREADCRUMB --> --}}
    <section class="bg_light_pink breadcrumb_section">
        <div class="abt-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>FAQ</h1>
                        </div>
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                            </ol>
                        </nav> -->
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas accusantium rerum reprehenderit cum
                    dolor molestias iste exercitationem. Possimus rerum numquam sint aliquam animi nisi. Odio laboriosam
                    ratione ea temporibus aperiam.</p>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION ABOUT --> --}}
@endsection
