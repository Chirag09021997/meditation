@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg bg_fixed overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg2.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Order Edit</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.orders') }}">Order List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION ORDER Edit -->
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
            <form method="post" action="{{ route('user.order.update', $order->id) }}" id="orderEdit">
                @csrf
                <div class="panel-collapse  coupon_form mb-3" id="coupon">
                    <div class="panel-body">
                        <p>If you have a coupon code.</p>
                        <div class="coupon field_form input-group form_style2">
                            <input type="text" id="apply_coupon" name="coupon_code" class="form-control"
                                value="{{ $order->coupon_code }}">
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
                                        value="{{ old('b_fname', $order?->orderAddress?->b_fname) }}">
                                    @if ($errors->has('b_fname'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_fname') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_lname">Last name <span class="required">*</span></label>
                                    <input type="text" required class="form-control" name="b_lname" id="b_lname"
                                        value="{{ old('b_lname', $order?->orderAddress?->b_lname) }}">
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
                                                    {{ old('b_country', $order?->orderAddress?->b_country) == $country['code'] ? 'selected' : '' }}>
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
                                    <input type="text" value="{{ old('b_address', $order->orderAddress->b_address) }}"
                                        class="form-control" name="b_address" id="b_address" required>
                                    @if ($errors->has('b_address'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_address') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_address2">Address line2:</label>
                                    <input type="text"
                                        value="{{ old('b_address2', $order?->orderAddress?->b_address2) }}"
                                        class="form-control" name="b_address2" id="b_address2">
                                    @if ($errors->has('b_address2'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_address2') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_city">City / Town: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_city" id="b_city"
                                        value="{{ old('b_city', $order?->orderAddress?->b_city) }}">
                                    @if ($errors->has('b_city'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_city') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_state">State / County: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_state" id="b_state"
                                        value="{{ old('b_state', $order?->orderAddress?->b_state) }}">
                                    @if ($errors->has('b_state'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_state') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_zipcode">Postcode / ZIP: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_zipcode" id="b_zipcode"
                                        value="{{ old('b_zipcode', $order?->orderAddress?->b_zipcode) }}">
                                    @if ($errors->has('b_zipcode'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_zipcode') }}</p>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="b_phone">Phone: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_phone" id="b_phone"
                                        value="{{ old('b_phone', $order?->orderAddress?->b_phone) }}">
                                    @if ($errors->has('b_phone'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_phone') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="b_email">Email address: <span class="required">*</span></label>
                                    <input class="form-control" required type="text" name="b_email" id="b_email"
                                        value="{{ old('b_email', $order?->orderAddress?->b_email) }}">
                                    @if ($errors->has('b_email'))
                                        <p class="text-danger font_style1">{{ $errors->first('b_email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row ">
                                <div class="heading_s2 col-md-12">
                                    <h5>Shipping Details</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_fname">First name:</label>
                                    <input type="text" class="form-control" name="s_fname" id="s_fname"
                                        value="{{ old('s_fname', $order?->orderAddress?->s_fname) }}">
                                    @if ($errors->has('s_fname'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_fname') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_lname">Last name:</label>
                                    <input type="text" class="form-control" name="s_lname" id="s_lname"
                                        value="{{ old('s_lname', $order?->orderAddress?->s_lname) }}">
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
                                                    {{ old('s_country', $order?->orderAddress?->s_country) == $country['code'] ? 'selected' : '' }}>
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
                                    <input type="text"
                                        value="{{ old('s_address', $order?->orderAddress?->s_address) }}"
                                        class="form-control" name="s_address" id="s_address">
                                    @if ($errors->has('s_address'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_address') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_address2">Address line2:</label>
                                    <input type="text"
                                        value="{{ old('s_address2', $order?->orderAddress?->s_address2) }}"
                                        class="form-control" name="s_address2" id="s_address2">
                                    @if ($errors->has('s_address2'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_address2') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_city">City / Town:</label>
                                    <input class="form-control" type="text" name="s_city" id="s_city"
                                        value="{{ old('s_city', $order?->orderAddress?->s_city) }}">
                                    @if ($errors->has('s_city'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_city') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_state">State / County:</label>
                                    <input class="form-control" type="text" name="s_state" id="s_state"
                                        value="{{ old('s_state', $order?->orderAddress?->s_state) }}">
                                    @if ($errors->has('s_state'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_state') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="s_zipcode">Postcode / ZIP:</label>
                                    <input class="form-control" type="text" name="s_zipcode" id="s_zipcode"
                                        value="{{ old('s_zipcode', $order?->orderAddress?->s_zipcode) }}">
                                    @if ($errors->has('s_zipcode'))
                                        <p class="text-danger font_style1">{{ $errors->first('s_zipcode') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="note">Order notes:</label>
                                    <textarea rows="5" class="form-control" name="note" id="note">{{ old('note', $order?->note) }}</textarea>
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
                <div class="row">
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
                                @foreach ($order?->orderItem as $key => $item)
                                    @php
                                        $discountedPrice = $item->price - $item->discount;
                                    @endphp
                                    <tr>
                                        <td class="product-thumbnail"><img src="{{ $item->store->product_thumb }}"
                                                alt="{{ $item->store->product_name }}" style="width:70px;height:70px;">
                                        </td>
                                        <td class="product-name">{{ $item->store->product_name }}</td>
                                        <td class="product-price">${{ $item->price }}</td>
                                        <td class="product-quantity">
                                            <button class="minus" data-index="{{ $item->id }}">-</button>
                                            <input type="text" value="{{ $item->quantity }}" class="qty w-25"
                                                min="1">
                                            <button class="plus" data-index="{{ $item->id }}">+</button>
                                        </td>
                                        <td class="product-subtotal">{{ $discountedPrice * $item->quantity }}</td>
                                        <td class="product-remove"><button class="remove"
                                                data-index="{{ $item->id }}">×</button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="small_divider clearfix"></div>
                        </div>
                    </div>
                    <div class="row my-3">
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
                                    <input class="form-check-input" type="radio" name="payment_option"
                                        id="exampleRadios5" value="paypal">
                                    <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                    <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your
                                        credit
                                        card if you don't have a PayPal account.</p>
                                </div>
                            </div>
                            <input type="hidden" name="cartItems" id="cartItemsInput" />
                            <button class="btn btn-default" type="submit">Update Order</button>
                        </div>
                    </div>
            </form>
        </div>
    </section>
    <!-- END SECTION ORDER Edit -->
@endsection
