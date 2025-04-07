@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg2.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Checkout</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('stores') }}">Store</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION CHECKOUT -->
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
            <form method="post" action="{{ route('checkout.store') }}" id="checkoutSubmit">
                @csrf
                <div class="panel-collapse  coupon_form mb-3" id="coupon">
                    <div class="panel-body">
                        <p>If you have a coupon code, please apply it below.</p>
                        <div class="coupon field_form input-group form_style2">
                            <input type="text" value="" id="apply_coupon" name="coupon_code" class="form-control"
                                placeholder="Enter Coupon Code..">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm add_apply_coupon">Apply Coupon</button>
                            </div>
                            <div class="input-group-append mx-1">
                                <button class="btn btn-default btn-sm clear_apply_coupon">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_s2">
                            <h5>Billing Details</h5>
                        </div>
                        <div class="form_style2">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="b_fname">First name <span class="required">*</span></label>
                                    <input type="text" required class="form-control" name="b_fname" id="b_fname"
                                        value="{{ old('b_fname') }}">
                                    @if ($errors->has('b_fname'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_fname') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_lname">Last name <span class="required">*</span></label>
                                    <input type="text" required class="form-control" name="b_lname" id="b_lname"
                                        value="{{ old('b_lname') }}">
                                    @if ($errors->has('b_lname'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_lname') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_country">Country <span class="required">*</span></label>
                                    <div class="custom_select">
                                        <select id="b_country" name="b_country">
                                            <option value="">Choose a option...</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country['code'] }}"
                                                    {{ old('b_country') == $country['code'] ? 'selected' : '' }}>
                                                    {{ $country['name'] }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('b_country'))
                                            <p class="text-danger font_style1">{{ $errors->first('b_country') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_address">Address: <span class="required">*</span></label>
                                    <input type="text" value="{{ old('b_address') }}" class="form-control"
                                        name="b_address" id="b_address" required>
                                    @if ($errors->has('b_address'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_address') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_address2">Address line2:</label>
                                    <input type="text" value="{{ old('b_address2') }}" class="form-control"
                                        name="b_address2" id="b_address2">
                                    @if ($errors->has('b_address2'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_address2') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_city">City / Town: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_city" id="b_city"
                                        value="{{ old('b_city') }}">
                                    @if ($errors->has('b_city'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_city') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_state">State / County: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_state" id="b_state"
                                        value="{{ old('b_state') }}">
                                    @if ($errors->has('b_state'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_state') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_zipcode">Postcode / ZIP: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_zipcode" id="b_zipcode"
                                        value="{{ old('b_zipcode') }}">
                                    @if ($errors->has('b_zipcode'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_zipcode') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_phone">Phone: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_phone" id="b_phone"
                                        value="{{ old('b_phone') }}">
                                    @if ($errors->has('b_phone'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_phone') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_email">Email address: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_email" id="b_email"
                                        value="{{ old('b_email') }}">
                                    @if ($errors->has('b_email'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_email') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="differentaddress">
                                        <input name="differentaddress" id="differentaddress" type="checkbox"
                                            value="{{ old('differentaddress') }}"
                                            {{ old('differentaddress') ? 'checked' : '' }}>
                                        <span> Ship to a different address?</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row different_address">
                                <div class="heading_s2 col-md-12">
                                    <h5>Shipping Details</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_fname">First name:</label>
                                    <input type="text" class="form-control" name="s_fname" id="s_fname"
                                        value="{{ old('s_fname') }}">
                                    @if ($errors->has('s_fname'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_fname') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_lname">Last name:</label>
                                    <input type="text" class="form-control" name="s_lname" id="s_lname"
                                        value="{{ old('s_lname') }}">
                                    @if ($errors->has('s_lname'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_lname') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_country">Country:</label>
                                    <div class="custom_select">
                                        <select id="s_country" name="s_country">
                                            <option value="">Choose a option...</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country['code'] }}"
                                                    {{ old('s_country') == $country['code'] ? 'selected' : '' }}>
                                                    {{ $country['name'] }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('s_country'))
                                            <p class="text-danger font_style1">{{ $errors->first('s_country') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_address">Address:</label>
                                    <input type="text" value="{{ old('s_address') }}" class="form-control"
                                        name="s_address" id="s_address">
                                    @if ($errors->has('s_address'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_address') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_address2">Address line2:</label>
                                    <input type="text" value="{{ old('s_address2') }}" class="form-control"
                                        name="s_address2" id="s_address2">
                                    @if ($errors->has('s_address2'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_address2') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_city">City / Town:</label>
                                    <input class="form-control" type="text" name="s_city" id="s_city"
                                        value="{{ old('s_city') }}">
                                    @if ($errors->has('s_city'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_city') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_state">State / County:</label>
                                    <input class="form-control" type="text" name="s_state" id="s_state"
                                        value="{{ old('s_state') }}">
                                    @if ($errors->has('s_state'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_state') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_zipcode">Postcode / ZIP:</label>
                                    <input class="form-control" type="text" name="s_zipcode" id="s_zipcode"
                                        value="{{ old('s_zipcode') }}">
                                    @if ($errors->has('s_zipcode'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_zipcode') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="note">Order notes:</label>
                                    <textarea rows="5" class="form-control" name="note" id="note">{{ old('note') }}</textarea>
                                    @if ($errors->has('note'))
                                        <p class="text-danger font_style1">{{ $errors->first('note') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="xs_divider clearfix"></div>
                    </div>
                </div>
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
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s2">
                            <h5>Your Orders</h5>
                        </div>
                        <div class="table-responsive order_table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody id="checkout_product_list">
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>SubTotal</td>
                                        <td>{{$symbol}}<span id="checkout-sub-total">0.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Discount</td>
                                        <td><span id="checkout-discount-total">0.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Charges</td>
                                        <td><span id="checkout-delivery-charges">0.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product-subtotal">Total</td>
                                        <td class="product-subtotal">{{$symbol}} <span id="checkout-total">0.00</span></td>
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
                    <div class="col-12">
                        <div class="payment_method">
                            <div class="custome-radio">
                                <input class="form-check-input" required type="radio" name="payment_option"
                                    id="exampleRadios3" value="direct" checked="">
                                <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                <p data-method="option3" class="payment-text">There are many variations of passages of
                                    Lorem
                                    Ipsum available, but the majority have suffered alteration in some form, by injected
                                    humour,
                                    or randomised words which don't look even slightly believable. </p>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5"
                                    value="paypal">
                                <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit
                                    card if you don't have a PayPal account.</p>
                            </div>
                        </div>
                        <input type="hidden" name="cartItems" id="cartItemsInput" />
                        <button class="btn btn-default" type="submit">Place Order</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- END SECTION CHECKOUT -->
@endsection
