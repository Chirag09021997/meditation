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
            <div class="row">
                <div class="col-md-6">
                    <div class="toggle_info">
                        <span>Returning customer? <a href="#loginform" data-toggle="collapse" class="collapsed"
                                aria-expanded="false">Click here to login</a></span>
                    </div>
                    <div class="panel-collapse collapse login_form mb-3" id="loginform">
                        <div class="panel-body">
                            <form method="post" class="login form_style2">
                                <p>If you have shopped with us before, please enter your details below. If you are a new
                                    customer, please proceed to the Billing &amp; Shipping section.</p>

                                <div class="form-group">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text" required class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="required">*</span></label>
                                    <input class="form-control" required type="password" name="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" name="login"
                                        value="Log in">Log in</button>
                                </div>
                                <div class="login_footer">
                                    <a href="#">Lost your password?</a>
                                    <label>
                                        <input name="rememberme" type="checkbox" value="forever"> <span>Remember me</span>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="toggle_info">
                        <span>Have a coupon? <a href="#coupon" data-toggle="collapse" class="collapsed"
                                aria-expanded="false">Click here to enter your code</a></span>
                    </div>
                    <div class="panel-collapse collapse coupon_form mb-3" id="coupon">
                        <div class="panel-body">
                            <p>If you have a coupon code, please apply it below.</p>
                            <div class="coupon field_form input-group form_style2">
                                <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">
                                <div class="input-group-append">
                                    <button class="btn btn-default btn-sm" type="submit">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_s2">
                        <h5>Billing Details</h5>
                    </div>
                    <form method="post" class="form_style2">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>First name <span class="required">*</span></label>
                                <input type="text" required class="form-control" name="fname" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last name <span class="required">*</span></label>
                                <input type="text" required class="form-control" name="lname" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Company Name:</label>
                                <input class="form-control" required type="text" name="cname">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Country <span class="required">*</span></label>
                                <div class="custom_select">
                                    <select>
                                        <option value="">Choose a option...</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Address: <span class="required">*</span></label>
                                <input type="text" value="" class="form-control" name="billing_address"
                                    required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Address line2:</label>
                                <input type="text" value="" class="form-control" name="billing_address2"
                                    required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>City / Town: <span class="required">*</span></label>
                                <input class="form-control" required type="text" name="city">
                            </div>
                            <div class="form-group col-md-6">
                                <label>State / County</label>
                                <input class="form-control" required type="text" name="state">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Postcode / ZIP <span class="required">*</span></label>
                                <input class="form-control" required type="text" name="zipcode">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone <span class="required">*</span></label>
                                <input class="form-control" required type="text" name="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email address <span class="required">*</span></label>
                                <input class="form-control" required type="text" name="email">
                            </div>
                            <div class="form-group col-md-12">
                                <label>
                                    <input name="createaccount" id="createaccount" type="checkbox" value="">
                                    <span> Create an account?</span>
                                </label>
                            </div>
                            <div class="form-group col-md-6 create-account">
                                <label>Create account password <span class="required">*</span></label>
                                <input class="form-control" required type="password" placeholder="Password"
                                    name="password">
                            </div>
                            <div class="form-group col-md-12">
                                <label>
                                    <input name="createaccount" id="differentaddress" type="checkbox" value="">
                                    <span> Ship to a different address?</span>
                                </label>
                            </div>
                        </div>
                        <div class="row different_address">
                            <div class="form-group col-md-6">
                                <label>First name <span class="required">*</span></label>
                                <input type="text" required class="form-control" name="fname" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last name <span class="required">*</span></label>
                                <input type="text" required class="form-control" name="lname" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Company Name:</label>
                                <input class="form-control" required type="text" name="cname">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Country <span class="required">*</span></label>
                                <div class="custom_select">
                                    <select>
                                        <option value="">Choose a option...</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Address: <span class="required">*</span></label>
                                <input type="text" value="" class="form-control" name="billing_address"
                                    required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Address line2:</label>
                                <input type="text" value="" class="form-control" name="billing_address2"
                                    required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>City / Town: <span class="required">*</span></label>
                                <input class="form-control" required type="text" name="city">
                            </div>
                            <div class="form-group col-md-6">
                                <label>State / County</label>
                                <input class="form-control" required type="text" name="state">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Postcode / ZIP <span class="required">*</span></label>
                                <input class="form-control" required type="text" name="zipcode">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Order notes</label>
                                <textarea rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="xs_divider clearfix"></div>
                </div>
            </div>
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
                            <tbody>
                                <tr>
                                    <td>yoga mat For Exercises <span class="product-qty">x 2</span></td>
                                    <td>$70.00</td>
                                </tr>
                                <tr>
                                    <td>Running Shoes <span class="product-qty">x 1</span></td>
                                    <td>$40.00</td>
                                </tr>
                                <tr>
                                    <td>Cotton Yoga Strap <span class="product-qty">x 3</span></td>
                                    <td>$156.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>SubTotal</td>
                                    <td>$266.00</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal">Total</td>
                                    <td class="product-subtotal">$266.00</td>
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
                            <input class="form-check-input" required="" type="radio" name="payment_option"
                                id="exampleRadios3" value="option3" checked="">
                            <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                            <p data-method="option3" class="payment-text">There are many variations of passages of Lorem
                                Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                                or randomised words which don't look even slightly believable. </p>
                        </div>
                        <div class="custome-radio">
                            <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4"
                                value="option4">
                            <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                            <p data-method="option4" class="payment-text">Please send your cheque to Store Name, Store
                                Street, Store Town, Store State / County, Store Postcode.</p>
                        </div>
                        <div class="custome-radio">
                            <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5"
                                value="option5">
                            <label class="form-check-label" for="exampleRadios5">Paypal</label>
                            <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit
                                card if you don't have a PayPal account.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-default">Place Order</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CHECKOUT -->
@endsection