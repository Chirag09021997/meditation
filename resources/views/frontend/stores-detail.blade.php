@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg4.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Store Detail</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('stores') }}">Store</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Store Detail</li>
                        </ol>
                    </nav>
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
                        <img src="{{ $store->product_thumb }}" alt="store" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pr_detail">
                        <div class="product-description">
                            <h4 class="product_title"><a href="#">{{ $store->product_name }}</a></h4>
                            <div class="product_price float-left">
                                <span
                                    class="price"><del>${{ $store->price }}</del><ins>${{ $store->price - $store->discount }}</ins></span>
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
                                    <input type="text" name="quantity" id="quantity" value="1" title="Qty"
                                        class="qty" size="4">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </div>
                            <div class="cart_btn">
                                <button class="btn btn-default rounded-0 btn-addtocart add-to-cart-btn" type="button"
                                    data-id="{{ $store->id }}" data-name="{{ $store->product_name }}"
                                    data-thumb="{{ $store->product_thumb }}" data-price="{{ $store->price }}"
                                    data-discount="{{ $store->discount }}">Add to
                                    cart</button>
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="product">
                            @if ($key % 2 == 0)
                                <span class="pr_flash">Sale</span>
                            @endif
                            <div class="product_img">
                                <a href="{{ route('stores.single', $store->id) }}"><img src="{{ $store->product_thumb }}"
                                        alt="store" /></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a
                                        href="{{ route('stores.single', $store->id) }}">{{ $store->product_name }}</a>
                                </h6>
                                <span
                                    class="price"><del>${{ $store->price }}</del><ins>${{ $store->price - $store->discount }}</ins></span>
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
    <!-- END SECTION SHOP DETAIL -->
@endsection
