@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg bg_fixed overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg2.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Order List</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION ORDER LIST -->
    <section>
        <div class="container">
            <h3 class="text-center">Orders List</h3>
            <div class="row">
                <div class="col-12">
                    <div class=" table-responsive animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <td>Order Date</td>
                                    <td>Order Number</td>
                                    <td>Total</td>
                                    <td>Status</td>
                                    <td>#</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ordersList as $order)
                                    <tr>
                                        <td>{{ $order['date'] }}</td>
                                        <td>#{{ $order['id'] }}</td>
                                        <td>{{  $order['symbol'].number_format($order['final_price'],2) }}</td>
                                        <td>{{ $order['status'] }}</td>
                                        <td>
                                            @if ($order['status'] == 'Pending')
                                                <a href="#" id="cancelOrderBtn" title="Cancel"
                                                    class="text-danger mx-2" data-id="{{ $order['id'] }}">Cancel</a>
                                                <a href="{{ route('user.order.edit', $order['id']) }}" title="Edit"
                                                    class="text-success mx-2">Edit</a>
                                            @endif
                                            <a href="{{ route('user.order.show', $order['id']) }}" title="Show"
                                                class="text-info mx-2">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
                                <form id="cancelOrderForm" action="{{ route('user.order.cancel') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                    <input type="hidden" name="order_id" id="order_id">
                                    <button type="submit" class="nav-link btn btn-link"></button>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION ORDER LIST -->
@endsection
