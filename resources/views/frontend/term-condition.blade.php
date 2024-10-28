@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BREADCRUMB --> --}}
    <section class="bg_light_pink breadcrumb_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Term-Condition</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Term-Condition</li>
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis doloremque libero facilis minima
                    aperiam dolore error quia repudiandae deserunt eligendi natus, ipsa sapiente fugit magnam labore. Optio
                    modi ullam perferendis?</p>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION Term-Condition --> --}}
@endsection
