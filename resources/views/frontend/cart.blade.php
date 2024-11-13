@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Cart</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('stores') }}">Store</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION CART -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive shop_cart_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                                <div class="coupon field_form input-group">
                                                    <input type="text" value="" class="form-control"
                                                        placeholder="Enter Coupon Code.." name="apply_coupon"
                                                        id="apply_coupon">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-dark btn-sm add_apply_coupon"
                                                            type="submit">Apply
                                                            Coupon</button>
                                                    </div>
                                                    <div class="input-group-append mx-1">
                                                        <button
                                                            class="btn btn-default btn-sm clear_apply_coupon">Clear</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 text-center text-md-right">
                                                <button class="btn btn-dark btn-sm" type="submit">Update Cart</button>
                                                <a href="{{ route('checkout') }}" class="btn btn-default btn-sm">Proceed to
                                                    Checkout</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="small_padding bg_gray">
                        <div class="heading_s2">
                            <h5>Cart Totals</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">Total</td>
                                        <td class="cart_total_amount cart_sub_total">$226.00</td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Discount</td>
                                        <td class="cart_total_amount cart_discount_total">$226.00</td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Grand Total</td>
                                        <td class="cart_total_amount cart_final_total"><strong>$226.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CART -->
@endsection
