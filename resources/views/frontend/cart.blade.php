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
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img
                                                src="{{ asset('assets/images/shop_small1.jpg') }}" alt="product1"></a></td>
                                    <td class="product-name" data-title="Product"><a href="#">yoga mat For
                                            Exercises</a>
                                    </td>
                                    <td class="product-price" data-title="Price">$23.00</td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="quantity" value="2" title="Qty"
                                                class="qty" size="4">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">$46.00</td>
                                    <td class="product-remove" data-title="Remove"><a href="#"><i
                                                class="ti-close"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img
                                                src="{{ asset('assets/images/shop_small2.jpg') }}" alt="product2"></a></td>
                                    <td class="product-name" data-title="Product"><a href="#">Running Shoes</a></td>
                                    <td class="product-price" data-title="Price">$45.00</td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="quantity" value="1" title="Qty"
                                                class="qty" size="4">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">$45.00</td>
                                    <td class="product-remove" data-title="Remove"><a href="#"><i
                                                class="ti-close"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img
                                                src="{{ asset('assets/images/shop_small3.jpg') }}" alt="product3"></a></td>
                                    <td class="product-name" data-title="Product"><a href="#">Cotton Yoga Strap</a>
                                    </td>
                                    <td class="product-price" data-title="Price">$45.00</td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="quantity" value="3" title="Qty"
                                                class="qty" size="4">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">$135.00</td>
                                    <td class="product-remove" data-title="Remove"><a href="#"><i
                                                class="ti-close"></i></a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                                <div class="coupon field_form input-group">
                                                    <input type="text" value="" class="form-control"
                                                        placeholder="Enter Coupon Code..">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-default btn-sm" type="submit">Apply
                                                            Coupon</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 text-center text-md-right">
                                                <button class="btn btn-dark btn-sm" type="submit">Update Cart</button>
                                                <a href="#" class="btn btn-default btn-sm">Proceed to Checkout</a>
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
                                        <td class="cart_total_label">Cart Subtotal</td>
                                        <td class="cart_total_amount">$226.00</td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Total</td>
                                        <td class="cart_total_amount"><strong>$226.00</strong></td>
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
