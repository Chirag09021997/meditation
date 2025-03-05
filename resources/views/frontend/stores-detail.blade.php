@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="bg_light_pink breadcrumb_section">
        <div class="abt-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>Store Detail</h1>
                        </div>
                        <!-- <nav aria-label="breadcrumb">
                                                                                                                                                                                                            <ol class="breadcrumb justify-content-center">
                                                                                                                                                                                                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                                                                                                                                                                                                <li class="breadcrumb-item active" aria-current="page">Events Details</li>
                                                                                                                                                                           </ol>
                                                                                                                                                                                                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION SHOP DETAIL -->
    <section class="small_pb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-image">
                        <span class="pr_flash bg_green">Sale</span>
                        <img src="{{ $store->product_thumb }}" alt="store"
                            onerror="this.onerror=null;this.src='{{ asset('assets/images/ic_theme_load.png') }}';" />
                    </div>
                </div>
                <div class="col-md-6">
                @php
    // Decode finance product JSON safely
    $financeProducts = json_decode($store->finance_product, true) ?? [];

    // Get selected country from cookie or set default
    $countryName = $_COOKIE['selectedCountry'] ?? 'India';

    // Find finance data for the selected country
    $financeData = collect($financeProducts)->firstWhere('country_name', $countryName);

    // Set default values to avoid null errors
    $originalPrice = $store->price;
    $discount = 0;
    $finalPrice = $originalPrice;
    $symbol = '';

    if (!is_null($financeData) && is_array($financeData)) {
        $originalPrice = $financeData['price'] ?? $store->price;
        $discount = $financeData['discount'] ?? 0;
        $symbol = $financeData['symbol'] ?? '';
        $finalPrice = $originalPrice - ($originalPrice * $discount / 100);
    }
@endphp

<div class="pr_detail">
    <div class="product-description">
        <h4 class="product_title"><a href="#">{{ $store->product_name }}</a></h4>
        <div class="product_price float-left">
            <span class="price">
                <del>{{ $symbol.number_format($originalPrice, 2) }}</del>
                <ins>{{ $symbol.number_format($finalPrice, 2) }}</ins>
            </span>
        </div>
        <div class="rating mt-2 float-right">
            <div class="product_rate" style="width:80%"></div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <p>{{ $store->short_description }}</p>
    </div>
    <hr>
    <div class="cart_extra">
        <div class="cart-product-quantity">
            <div class="quantity">
                <input type="button" value="-" class="minus">
                <input type="text" name="quantity" id="quantity" value="1" title="Qty" class="qty" size="4">
                <input type="button" value="+" class="plus">
            </div>
        </div>
        <div class="cart_btn">
            <button class="btn btn-default rounded-0 add-to-cart-btn" type="button"
                data-id="{{ $store->id }}" data-name="{{ $store->product_name }}"
                data-thumb="{{ $store->product_thumb }}" data-price="{{ $originalPrice }}"
                data-discount="{{ $discount }}" data-finalprice="{{ $finalPrice }}">
                Add to cart
            </button>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style1">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description"
                                    role="tab" aria-controls="Description" aria-selected="true">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content shop_info_tab">
                            <div class="tab-pane fade show active" id="Description" role="tabpanel"
                                aria-labelledby="Description-tab">
                                <div>
                                    {!! $store->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($latestStore->count() > 0)
        <section class="small_pt pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s2 m-0">
                            <h4>Latest Store</h4>
                        </div>
                        <div class="small_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($latestStore as $key => $store)
                            @php
                                // Decode finance product JSON
                                $financeProducts = json_decode($store->finance_product, true) ?? [];

                                // Default country (modify as needed)
                                $countryName = $_COOKIE['selectedCountry'] ?? 'India';


                                // Find finance data for the selected country
                                $financeData = collect($financeProducts)->firstWhere('country_name', $countryName);

                                // Extract price details
                                $originalPrice = $financeData['price'] ?? $store->price;
                                $discount = $financeData['discount'] ?? 0;
                                $finalPrice = $originalPrice - ($originalPrice * $discount / 100);
                                $symbol = $financeData['symbol'];
                            @endphp
                            <div class="col-lg-3 col-sm-6">
                                <div class="product">
                                    @if ($key % 2 == 0)
                                        <span class="pr_flash">Sale</span>
                                    @endif
                                    <div class="product_img">
                                        <a href="{{ route('stores.single', $store->id) }}"><img src="{{ $store->product_thumb }}"
                                                alt="store"
                                                onerror="this.onerror=null;this.src='{{ asset('assets/images/ic_theme_load.png') }}';" /></a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="{{ route('stores.single', $store->id) }}"
                                                        class="btn btn-default rounded-0 view-btn">View</a></li>
                                                <li style="margin-top: 10px;"><button class="btn btn-default rounded-0 add-to-cart-btn"
                                                        data-id="{{ $store->id }}" data-name="{{ $store->product_name }}"
                                                        data-thumb="{{ $store->product_thumb }}" data-price="{{ $originalPrice }}" data-discount="{{ $discount }}"
                                                        data-finalprice="{{ $finalPrice }}">Add To Cart</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a
                                                href="{{ route('stores.single', $store->id) }}">{{ $store->product_name }}</a>
                                        </h6>
                                        <span class="price">
                                            <del>{{ $symbol.$originalPrice }}</del>
                                            <ins>{{ $symbol.$finalPrice}}</ins>
                                        </span>
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- END SECTION SHOP DETAIL -->
@endsection