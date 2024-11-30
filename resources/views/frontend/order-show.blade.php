@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg bg_fixed overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg2.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Order History</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.orders') }}">Order List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order History</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION ORDER History -->
    <section>
        <div class="container">
            <div class="h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-10 col-xl-8">
                        <div class="card" style="border-radius: 10px;">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0 font-weight-bold" style="color: #5db2d6;">Orders History
                                    </p>
                                </div>
                                @foreach ($order->orderItem as $item)
                                    <div class="card shadow-0 border mb-4">
                                        <div class="card-body">
                                            <div class="row my-2">
                                                <div class="col-md-2">
                                                    <img src="{{ $item->store->product_thumb }}" class="img-fluid"
                                                        alt="Phone">
                                                </div>
                                                <div
                                                    class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                    <p class="text-muted mb-0">{{ $item->store->product_name }}</p>
                                                </div>
                                                <div
                                                    class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                    <p class="text-muted mb-0 small">
                                                        <del class="mx-2">{{ $item->price }}</del>
                                                        <b class="mx-2">{{ $item->price - $item->discount }}</b>
                                                    </p>
                                                </div>
                                                <div
                                                    class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                    <p class="text-muted mb-0 small">Qty: {{ $item->quantity }}</p>
                                                </div>
                                                <div
                                                    class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                    <p class="text-muted mb-0 small">
                                                        ${{ ($item->price - $item->discount) * $item->quantity }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="card shadow-0 border mb-4">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-2">
                                                <p class="text-muted mb-0 small">Track Order</p>
                                            </div>
                                            <div class="col-md-10">
                                                @php
                                                    $status = $order->status;
                                                    switch ($status) {
                                                        case 'Complete':
                                                            $status = 100;
                                                            break;
                                                        case 'Pending':
                                                            $status = 40;
                                                            break;
                                                        case 'Shipping':
                                                            $status = 70;
                                                            break;
                                                        default:
                                                            $status = 10;
                                                            break;
                                                    }
                                                @endphp
                                                <div class="progress" style="height: 6px; border-radius: 16px;">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 20%; border-radius: 16px; background-color: #5db2d6;"
                                                        aria-valuenow="{{ $status }}" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-around mb-1">
                                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Cancel</p>
                                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Pending</p>
                                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivery</p>
                                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between pt-2">
                                    <p class="fw-bold mb-0">Order Details</p>
                                    <p class="text-muted mb-0"><span class="fw-bold me-4">Total : </span>
                                        ${{ $order->total_price }}</p>
                                </div>

                                <div class="d-flex justify-content-between pt-2">
                                    <p class="text-muted mb-0">Invoice Number : #{{ $order->id }}</p>
                                    <p class="text-muted mb-0"><span class="fw-bold me-4">Discount : </span>
                                        ${{ $order->total_discount }}</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="text-muted mb-0">Invoice Date : {{ $order->created_at->format('d-m-Y') }}</p>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>
                            <div class="card-footer border-0 px-4 py-5"
                                style="background-color: #5db2d6; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">
                                    Total Paid : <span class="h2 mb-0 mx-2">${{ $order->final_price }}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION ORDER History -->
@endsection
