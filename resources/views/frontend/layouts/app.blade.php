<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('frontend.layouts.head')
</head>

<body>
    {{-- <!-- LOADER --> --}}
    <div id="preloader">
        <div class="loading_wrap">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
        </div>
    </div>
    {{-- <!-- END LOADER --> --}}

    {{-- <!-- START HEADER --> --}}
    @include('frontend.layouts.navbar')
    {{-- <!-- END HEADER --> --}}

    @yield('content')

    {{-- <!-- START FOOTER --> --}}
    @include('frontend.layouts.footer')

</body>

</html>
