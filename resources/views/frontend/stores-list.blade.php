@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg bg_fixed overlay_bg_blue_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg2.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Store List</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Store List</li>
                        </ol>
                    </nav>
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
                            <span class="align-middle">Showing 1-9 of 50 results</span>
                        </div>
                        <div class="col-auto">
                            <div class="custom_select">
                                <select>
                                    <option value="default">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="date">Sort by newness</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_container grid_view">
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="product">
                                <span class="pr_flash">-25%</span>
                                <div class="product_img">
                                    <a href="#"><img src="{{ asset('assets/images/product_img5.jpg') }}"
                                            alt="product_img5" /></a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Purple 6 mm Yoga Mat</a></h6>
                                    <span class="price"><ins>$25.00</ins></span>
                                    <div class="rating">
                                        <div class="product_rate" style="width:92%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="#"><img src="{{ asset('assets/images/product_img6.jpg') }}"
                                            alt="product_img6" /></a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Yoga Fitness Exercise Ball</a></h6>
                                    <span class="price"><del>$15.00</del><ins>$13.00</ins></span>
                                    <div class="rating">
                                        <div class="product_rate" style="width:72%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product">
                                <span class="pr_flash">-20%</span>
                                <div class="product_img">
                                    <a href="#"><img src="{{ asset('assets/images/product_img7.jpg') }}"
                                            alt="product_img7" /></a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Purple Yoga Mat Bag</a></h6>
                                    <span class="price"><ins>$18.00</ins></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="#"><img src="{{ asset('assets/images/product_img8.jpg') }}"
                                            alt="product_img8" /></a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Yoga Dress</a></h6>
                                    <span class="price"><del>$29.00</del><ins>$36.00</ins></span>
                                    <div class="rating">
                                        <div class="product_rate" style="width:72%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="#"><img src="{{ asset('assets/images/product_img9.jpg') }}"
                                            alt="product_img9" /></a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="btn btn-default rounded-0">Add To Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Yoga Mat Towels</a></h6>
                                    <span class="price"><del>$22.00</del><ins>$18.00</ins></span>
                                    <div class="rating">
                                        <div class="product_rate" style="width:72%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3 mt-lg-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i
                                            class="ion-ios-arrow-thin-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="ion-ios-arrow-thin-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
                    <div class="sidebar">
                        <div class="widget widget_search">
                            <form class="search_form">
                                <input required="" class="form-control" placeholder="Search..." type="text">
                                <button type="submit" title="Search" name="submit" value="Submit">
                                    <span class="ti-search"></span>
                                </button>
                            </form>
                        </div>
                        <div class="widget widget_categories">
                            <h5 class="widget_title">Categories</h5>
                            <ul class="border_bottom_dash">
                                <li><a href="#"><span class="categories_name">Progress</span><span
                                            class="categories_num">(9)</span></a></li>
                                <li><a href="#"><span class="categories_name">Yoga &amp; Meditation</span><span
                                            class="categories_num">(6)</span></a></li>
                                <li><a href="#"><span class="categories_name">Training</span><span
                                            class="categories_num">(4)</span></a></li>
                                <li><a href="#"><span class="categories_name">Challenge</span><span
                                            class="categories_num">(7)</span></a></li>
                                <li><a href="#"><span class="categories_name">Fitness Workout</span><span
                                            class="categories_num">(12)</span></a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Filter By Price</h5>
                            <div class="filter_price">
                                <div id="price_filter"></div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Price <span id="flt_price"></span></span>
                                    <input type="hidden" id="price_first">
                                    <input type="hidden" id="price_second">
                                    <button type="submit" class="btn btn-default btn-sm rounded-0">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Recent Items</h5>
                            <ul class="recent_post border_bottom_dash list_none">
                                <li>
                                    <div class="post_img">
                                        <a href="#"><img src="{{ asset('assets/images/shop_small1.jpg') }}"
                                                alt="shop_small1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">yoga mat For Exercises</a></h6>
                                        <div class="product_price"><span
                                                class="price"><del>$35.00</del><ins>$23.00</ins></span></div>
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_img">
                                        <a href="#"><img src="{{ asset('assets/images/shop_small2.jpg') }}"
                                                alt="shop_small2"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Running Shoes</a></h6>
                                        <div class="product_price"><span
                                                class="price"><del>$35.00</del><ins>$45.00</ins></span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_img">
                                        <a href="#"><img src="{{ asset('assets/images/shop_small3.jpg') }}"
                                                alt="shop_small3"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Cotton Yoga Strap</a></h6>
                                        <div class="product_price"><span class="price"><ins>$45.00</ins></span></div>
                                        <div class="rating">
                                            <div class="product_rate" style="width:92%"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_tags">
                            <h5 class="widget_title">tags</h5>
                            <div class="tags">
                                <a href="#">Gym</a>
                                <a href="#">Fitness</a>
                                <a href="#">Cardio</a>

                                <a href="#">Cycling</a>
                                <a href="#">Workout</a>
                            </div>
                        </div>
                        <div class="widget widget_instagram">
                            <h5 class="widget_title">Instagram Feeds</h5>
                            <ul class="list_none instafeed">
                                <li><a href="#"><img src="{{ asset('assets/images/insta_img1.jpg') }}"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/insta_img2.jpg') }}"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/insta_img3.jpg') }}"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/insta_img4.jpg') }}"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/insta_img5.jpg') }}"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/insta_img6.jpg') }}"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/insta_img7.jpg') }}"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/insta_img8.jpg') }}"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SHOP -->
@endsection