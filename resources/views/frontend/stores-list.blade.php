@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="bg_light_pink breadcrumb_section"
        data-img-src="{{ asset('assets/images/breadcrumb_bg2.jpg') }}">
        <div class="abt-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title space">
                        <h1>Store List</h1>
                    </div>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Store List</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION SHOP -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row align-items-center justify-content-between pb-1 mb-4">
                        <div class="col-auto">
                            <span class="align-middle">Showing
                                {{ $stores->perPage() * $stores->currentPage() - $stores->perPage() + 1 }}-{{ $stores->perPage() * $stores->currentPage() }}
                                of
                                {{ $stores->total() }}
                                results</span>
                        </div>
                    </div>
                    <div class="row shop_container grid_view">
                        @foreach ($stores as $store)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product">
                                    <span class="pr_flash">Sale</span>
                                    <div class="product_img">
                                        <a href="{{ route('stores.single', $store->id) }}"><img
                                                src="{{ $store->product_thumb }}" alt="store" /></a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="#" class="btn btn-default rounded-0 add-to-cart-btn"
                                                        data-id="{{ $store->id }}" data-name="{{ $store->product_name }}"
                                                        data-thumb="{{ $store->product_thumb }}"
                                                        data-price="{{ $store->price }}"
                                                        data-discount="{{ $store->discount }}">Add To Cart</a>
                                                </li>
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
                    <div class="row">
                        <div class="col-12 mt-3 mt-lg-4">
                            <div class="pagination justify-content-center">
                                @if ($stores->onFirstPage())
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $stores->previousPageUrl() }}" tabindex="-1">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </a>
                                    </li>
                                @endif

                                @php
                                    $start = max(1, $stores->currentPage() - 2);
                                    $end = min($start + 4, $stores->lastPage());
                                    if ($stores->lastPage() - $stores->currentPage() < 2) {
                                        $start = max(1, $stores->lastPage() - 4);
                                    }
                                @endphp

                                @for ($page = $start; $page <= $end; $page++)
                                    <li class="page-item {{ $page == $stores->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $stores->url($page) }}">{{ $page }}</a>
                                    </li>
                                @endfor

                                @if ($stores->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $stores->nextPageUrl() }}">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </li>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
                    <div class="sidebar">
                        <div class="widget">
                            <h5 class="widget_title">Filter By Price</h5>
                            <div class="filter_price">
                                <div id="price_filter"></div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Price <span id="flt_price"></span></span>
                                    <form action="{{ route('stores') }}" method="get">
                                        <input type="hidden" name="price_first" id="price_first" value="0">
                                        <input type="hidden" name="price_second" id="price_second" value="500">
                                        <button type="submit" class="btn btn-default btn-sm rounded-0">Filter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Latest Items</h5>
                            <ul class="recent_post border_bottom_dash list_none">
                                @foreach ($latestStore as $store)
                                    <li>
                                        <div class="post_img">
                                            <a href="{{ route('stores.single', $store->id) }}"><img
                                                    src="{{ $store->product_thumb }}" alt="store" /></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">{{ $store->product_name }}</a></h6>
                                            <div class="product_price">
                                                <span
                                                    class="price"><del>${{ $store->price }}</del><ins>${{ $store->price - $store->discount }}</ins>
                                                </span>
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                            </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SHOP -->
@endsection
