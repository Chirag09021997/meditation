@extends('frontend.layouts.app')
@section('content')
    <section style="height: 75vh !important;">
        <div class="container py-5 my-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <h3 class="mb-5">Sign in</h3>
                    <button onclick="window.location='{{ url('/auth/google') }}'" class="btn btn-lg btn-block btn-primary"
                        style="background-color: #508bfc;" type="submit"><i class="fab fa-google me-2 "></i> Sign in
                        with google</button>
                </div>
            </div>
        </div>
    </section>
@endsection
