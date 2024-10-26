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
                        <img src="{{ asset('assets/images/product1.jpg') }}" alt="product" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pr_detail">
                        <div class="product-description">
                            <h4 class="product_title"><a href="#">yoga mat For Exercises</a></h4>
                            <div class="product_price float-left">
                                <span class="price"><del>$35.00</del><ins>$23.00</ins></span>
                            </div>
                            <div class="rating mt-2 float-right">
                                <div class="product_rate" style="width:80%"></div>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature.</p>
                            <p>At vero accusamus iusto odio dignissimos ducimus blanditiis praesentium deleniti corrupti
                                molestias excepturi sint occaecati cupiditate provident.</p>
                        </div>
                        <hr>
                        <div class="cart_extra">
                            <div class="cart-product-quantity">
                                <div class="quantity">
                                    <input type="button" value="-" class="minus">
                                    <input type="text" name="quantity" value="1" title="Qty" class="qty"
                                        size="4">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </div>
                            <div class="cart_btn">
                                <button class="btn btn-default rounded-0 btn-addtocart" type="button">Add to
                                    cart</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <ul class="product-meta list_none">
                            <li>SKU: BWHS673</li>
                            <li>Category: <a href="#">Accessories</a></li>
                        </ul>
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
                            <li class="nav-item">
                                <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info"
                                    role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab"
                                    aria-controls="Reviews" aria-selected="false">Reviews (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content shop_info_tab">
                            <div class="tab-pane fade show active" id="Description" role="tabpanel"
                                aria-labelledby="Description-tab">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    Vivamus bibendum magna Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    It has roots in a piece of classical Latin literature from 45 BC, making it over
                                    2000 years old.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in
                                    culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum
                                    quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                            <div class="tab-pane fade" id="Additional-info" role="tabpanel"
                                aria-labelledby="Additional-info-tab">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Weight</td>
                                        <td>1 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Red, Green</td>
                                    </tr>
                                    <tr>
                                        <td>Dimensions</td>
                                        <td>15 × 10 × 20 cm</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                <div class="comment_box">
                                    <div class="posts-title">
                                        <h5>(03) Comments</h5>
                                    </div>
                                    <ul class="list_none comment_list">
                                        <li class="comment_info">
                                            <div class="d-flex">
                                                <div class="user_img">
                                                    <img src="{{ asset('assets/images/client_img1.jpg') }}"
                                                        alt="client_img1">
                                                </div>
                                                <div class="comment_content">
                                                    <div class="d-flex">
                                                        <div class="meta_data">
                                                            <h6><a href="#">Merry Walter</a></h6>
                                                            <div class="comment-time">March 5, 2018, 6:05 PM</div>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <a href="#" class="comment-reply">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>We denounce with righteous indignation and dislike men who are so
                                                        beguiled and demoralized by the charms of pleasure of the
                                                        moment, so blinded by desire that the cannot foresee the pain
                                                        and trouble that.</p>
                                                </div>
                                            </div>
                                            <ul class="children_comment">
                                                <li class="comment_info">
                                                    <div class="d-flex">
                                                        <div class="user_img">
                                                            <img src="{{ asset('assets/images/client_img3.jpg') }}"
                                                                alt="client_img3">
                                                        </div>
                                                        <div class="comment_content">
                                                            <div class="d-flex">
                                                                <div class="meta_data">
                                                                    <h6><a href="#">Alia Noor</a></h6>
                                                                    <div class="comment-time">March 5, 2018, 6:05 PM
                                                                    </div>
                                                                </div>
                                                                <div class="ml-auto">
                                                                    <a href="#" class="comment-reply">Reply</a>
                                                                </div>
                                                            </div>
                                                            <p>We denounce with righteous indignation and dislike men
                                                                who are so beguiled and demoralized by the charms of
                                                                pleasure of the moment, so blinded by desire that the
                                                                cannot foresee the pain and trouble
                                                                that.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="comment_info">
                                            <div class="d-flex">
                                                <div class="user_img">
                                                    <img src="{{ asset('assets/images/client_img2.jpg') }}"
                                                        alt="client_img2">
                                                </div>
                                                <div class="comment_content">
                                                    <div class="d-flex">
                                                        <div class="meta_data">
                                                            <h6><a href="#">Jessica Olivia</a></h6>
                                                            <div class="comment-time">April 15, 2018, 10:30 PM</div>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <a href="#" class="comment-reply">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>We denounce with righteous indignation and dislike men who are so
                                                        beguiled and demoralized by the charms of pleasure of the
                                                        moment, so blinded by desire that the cannot foresee the pain
                                                        and trouble that.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="posts-title">
                                        <h5>Write a comment</h5>
                                    </div>
                                    <form class="field_form icon_form" name="enq" method="post">
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <p class="star_rating">
                                                    <span data-value="1"><i class="ion-android-star"></i></span>
                                                    <span data-value="2"><i class="ion-android-star"></i></span>
                                                    <span data-value="3"><i class="ion-android-star"></i></span>
                                                    <span data-value="4"><i class="ion-android-star"></i></span>
                                                    <span data-value="5"><i class="ion-android-star"></i></span>
                                                </p>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="form-input">
                                                    <span>
                                                        <i class="ti-comments"></i>
                                                    </span>
                                                    <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="form-input">
                                                    <span>
                                                        <i class="ti-user"></i>
                                                    </span>
                                                    <input required="required" placeholder="Enter Name *"
                                                        class="form-control" name="name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="form-input">
                                                    <span>
                                                        <i class="ti-email"></i>
                                                    </span>
                                                    <input required="required" placeholder="Enter Email *"
                                                        class="form-control" name="email" type="email">
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <button type="submit" class="btn btn-default" name="submit"
                                                    value="Submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
                        <h4>Releted Store</h4>
                    </div>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product">
                        <span class="pr_flash">Sale</span>
                        <div class="product_img">
                            <a href="#"><img src="{{ asset('assets/images/product_img1.jpg') }}"
                                    alt="product_img1" /></a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="#">yoga mat For Exercises</a></h6>
                            <span class="price"><del>$35.00</del><ins>$23.00</ins></span>
                            <div class="rating">
                                <div class="product_rate" style="width:80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product">
                        <div class="product_img">
                            <a href="#"><img src="{{ asset('assets/images/product_img2.jpg') }}"
                                    alt="product_img2" /></a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="#">Running Shoes</a></h6>
                            <span class="price"><del>$35.00</del><ins>$45.00</ins></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product">
                        <span class="pr_flash">-25%</span>
                        <div class="product_img">
                            <a href="#"><img src="{{ asset('assets/images/product_img3.jpg') }}"
                                    alt="product_img3" /></a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="#">Cotton Yoga Strap</a></h6>
                            <span class="price"><ins>$45.00</ins></span>
                            <div class="rating">
                                <div class="product_rate" style="width:92%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product">
                        <div class="product_img">
                            <a href="#"><img src="{{ asset('assets/images/product_img4.jpg') }}"
                                    alt="product_img4" /></a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="#">Plastic 900 ml Bottle</a></h6>
                            <span class="price"><del>$35.00</del><ins>$12.00</ins></span>
                            <div class="rating">
                                <div class="product_rate" style="width:85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SHOP DETAIL -->
@endsection
