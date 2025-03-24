<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('frontend.layouts.head')
    <script>
    let currencySymbol = "{{$symbol}}";
</script>
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
    @php

        // Get selected country from cookie or set default
        $countryName = $_COOKIE['selectedCountry'] ?? 'India';
        $symbol="₹";
        if($countryName=="India"){
            $symbol="₹";
        }else {
            $symbol="$";
        }
    @endphp
</body>

</html>
