@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BREADCRUMB --> --}}
    <section class="bg_light_pink breadcrumb_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Privacy Policy</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy-Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION BREADCRUMB --> --}}

    {{-- <!-- START SECTION Term-Condition --> --}}
    <section>
        <div class="container">
            <div class="row align-items-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, eveniet. Expedita vero neque ut
                    voluptatem suscipit soluta odit porro beatae cum sed sequi ex corrupti voluptas tenetur reprehenderit,
                    aliquid maxime.</p>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION Term-Condition --> --}}
@endsection
