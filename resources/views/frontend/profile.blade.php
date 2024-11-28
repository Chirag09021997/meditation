@extends('frontend.layouts.app')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg2.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Profile</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('stores') }}">Store</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION Profile -->
    <section>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_s2">
                            <h5>Profile Update</h5>
                        </div>
                        <div class="form_style2">
                            <div class="row">
                                @foreach ([['name', 'text', 'Name', 'Enter name', true], ['country_name', 'text', 'Country Name', 'Enter country name', true], ['business_category', 'text', 'Business Category', 'Enter business category', false], ['mobile_no', 'text', 'Mobile No', 'Enter Mobile No', false], ['dob', 'date', 'Dob', '', false]] as [$field, $type, $label, $placeholder, $required])
                                    <div class="form-group col-md-6">
                                        <label
                                            for="{{ $field }}">{{ $label }}{{ $required ? ' *' : '' }}</label>
                                        <input type="{{ $type }}" name="{{ $field }}"
                                            id="{{ $field }}"
                                            value="{{ old($field, Auth::guard('customer')->user()->$field) }}"
                                            class="form-control" placeholder="{{ $placeholder }}"
                                            {{ $required ? 'required' : '' }}>
                                        @error($field)
                                            <p class="text-danger font_style1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endforeach

                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email"
                                        value="{{ old('email', Auth::guard('customer')->user()->email) }}"
                                        class="form-control" name="email" id="email" disabled>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="profile">Profile</label>
                                    <input type="file" name="profile" id="profile" class="form-control"
                                        accept="image/*">
                                    @if (Auth::guard('customer')->user()->profile)
                                        <img src="{{ Auth::guard('customer')->user()->profile }}" alt="profile"
                                            class="w-25 my-1">
                                    @endif
                                    @error('profile')
                                        <p class="text-danger font_style1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-default" type="submit">Update</button>
            </form>
        </div>
    </section>
    <!-- END SECTION Profile -->
@endsection
