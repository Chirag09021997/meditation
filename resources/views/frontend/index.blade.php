@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BANNER --> --}}
    <section class="banner_slider banner_slide_half p-0">
        @if (session('success'))
            <script>
                localStorage.removeItem('cart');
                localStorage.removeItem('coupon');
            </script>
        @endif
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($sliderLists as $key => $slider)
                    @if ($slider->text_align == 'Left')
                        <div class="carousel-item slider_bg_color bg-content {{ $key == 0 ? 'active' : ''}}">
                            <a href="{{ route('slider-detail.show', $slider->id) }}">

                                <div class="banner_slide_content slider2"
                                    style="background-image: url('{{ asset($slider->background) }}'); background-size: contain; background-position: center;">
                                    <div class="container">
                                        <div class="row justify-content-end align-items-center">
                                            <div class="col-xl-6 col-md-5">
                                                <div class="banner_img" data-animation="fadeIn" data-animation-delay="0.4s"
                                                    data-parallax='{"y": 30, "smoothness": 10}'>
                                                    <!-- <div>
                                                                                                                                                                                                                                                    <img src="{{ $slider->background }}" alt="image" />
                                                                                                                                                                                                                                                </div> -->

                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-7 ">
                                                <div class="d-section">
                                                    <!-- <img src="{{ asset('assets/images/bg.svg') }}" class="rotate linear infinite" /> -->
                                                    <div class="banner_content animation slider-section" data-animation="zoomIn"
                                                        data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                                        <h3 class="animation" data-animation="fadeInDown"
                                                            data-animation-delay="0.5s">
                                                            {{ $slider->title }}
                                                        </h3>
                                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                            {{ $slider->sub_description }}
                                                        </p>
                                                        <!-- <a class="btn btn-default rounded-0 animation"
                                                                                                                                                                                                                                        href="{{ route('slider-detail.show', $slider->id) }}"
                                                                                                                                                                                                                                        data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                                                                                                                                                                                                                    <a class="btn btn-white rounded-0 animation" href="/contact" target="_blank"
                                                                                                                                                                                                                                        data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a> -->
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="carousel-item slider_bg_color {{ $key == 0 ? 'active' : ''}}">
                            <a href="{{ route('slider-detail.show', $slider->id) }}">

                                <div class="banner_slide_content slider2"
                                    style="margin-top: 20px; background-image: url('{{ asset($slider->background) }}');">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-5">
                                                <div class="banner_img2 text-center">
                                                    <!-- <div class="animation border_img" data-animation="fadeInRight"
                                                                                                                                                                                                                                                    data-animation-delay="0.5s"> -->
                                                    <!-- <img data-parallax='{"y": -30, "smoothness": 20}'
                                                                                                                                                                                                                                                        src="{{ $slider->background }}" alt="image" /> -->
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-7 order-md-first">
                                                <div class="banner_content animation" data-animation="fadeIn"
                                                    data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'
                                                    style="height:600px; min-height: 10em;display: table-cell;vertical-align: middle">
                                                    <h3 class="animation mt-7 blue-text" data-animation="fadeInDown"
                                                        data-animation-delay="0.5s">{{ $slider->title }}</h3>
                                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                        {{ $slider->sub_description }}
                                                    </p>
                                                    <a class="btn btn-default rounded-0 animation"
                                                        href="{{ route('slider-detail.show', $slider->id) }}"
                                                        data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                                    <a class="btn btn-white rounded-0 animation" href="/contact"
                                                        data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="banner_shape">
                                <div class="shape_circle1">
                                    <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                        <img src="{{ asset('assets/images/Group-circle.png') }}" alt="image"
                                            class="rotate linear infinite" />
                                    </div>
                                </div>
                                <div class="shape_circle2">
                                    <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                        <img src="{{ asset('assets/images/Group-blue.png') }}" alt="image"
                                            class="rotate linear infinite" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="carousel_nav">
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i
                        class="fa-solid fa-angle-left"></i></a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i
                        class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <div class="banner_shape">
        <div class="shape1 shape1-top">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ asset('assets/images/Group-circle.png') }}" alt="image" class="r-link linear infinite" />
            </div>
        </div>
        <div class="shape2 shape2-top">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ asset('assets/images/Group-blue.png') }}" alt="image" class="r-link linear infinite" />
            </div>
        </div>
    </div>
    {{-- <!-- END SECTION BANNER --> --}}

    {{-- <!-- START SECTION BENIFIT --> --}}
    <section class="pb_70 bg-yoga pt-0">
        <div class="container ">
            <div class="row justify-content-center">
                <img src="{{ asset('assets/images/bg2.svg') }}" class="rotate  linear infinite circle-img" />
                <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <!-- <span class="sub_heading">What we do</span> -->
                        <h2>Benefits Of Delta Meditation</h2>
                    </div>
                    <p>Tejas Aura is an online and offline meditaon and spiritual educaon plaorm. We
                        share meditaon and spiritual knowledge in easy-to-understand terms, such that you can
                        actually apply it in your life.
                    </p>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/strong-body.png') }}" width="35" height="35"
                                alt="strong-body">
                        </div>
                        <div class="intro_desc">
                            <h5>Reduces Stress</h5>
                            <p> Meditation helps lower cortisol levels, which are associated with stress. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.3s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/flexibility.png') }}" width="35" height="35"
                                alt="flexibility">
                        </div>
                        <div class="intro_desc">
                            <h5>Improves Focus</h5>
                            <p> Regular practice enhances attention and concentration. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.4s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/healthy-lifestyle.png') }}" width="35" height="35"
                                alt="healthy-lifestyle">
                        </div>
                        <div class="intro_desc">
                            <h5>Increases Self-Awareness</h5>
                            <p> Encourages mindfulness and helps develop a deeper understanding of oneself. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/blood-flow.png') }}" width="35" height="35" alt="blood-flow">
                        </div>
                        <div class="intro_desc">
                            <h5>Reduces Anxiety </h5>
                            <p> Can decrease symptoms of anxiety and promote emotional stability. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.3s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/drops-blood.png') }}" width="35" height="35"
                                alt="drops-blood">
                        </div>
                        <div class="intro_desc">
                            <h5>Boosts Creativity</h5>
                            <p> Encourages out-of-the-box thinking and problem-solving skills. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.4s">
                        <div class="box_icon">
                            <img src="{{ asset('assets/images/adrenal-gland.png') }}" width="35" height="35"
                                alt="adrenal-gland">
                        </div>
                        <div class="intro_desc">
                            <h5>Enhances Memory</h5>
                            <p> Improves working memory and cognitive clarity. </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <div class="banner_shape">
        <div class="shape1">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ asset('assets/images/Group-circle.png') }}" alt="image" class="r-link linear infinite" />
            </div>
        </div>
        <div class="shape2">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ asset('assets/images/Group-blue.png') }}" alt="image" class="r-link linear infinite" />
            </div>
        </div>
    </div>
    {{-- <!-- END SECTION BENIFIT --> --}}

    {{-- <!-- START SECTION ABOUT --> --}}
    <section class="bg_gray bg-yoga">
        <div class="container">
            <div class="row justify-content-center">
                <img src="{{ asset('assets/images/bg2.svg') }}" class="rotate linear infinite circle-img2" />
                <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="heading_s1 center">
                        <h2>Better Life With Delta Circle</h2>
                    </div>
                    <p class="center">We all get up and go to work, but when we are asked why, we all have different
                        answers. However, the
                        common goal is happiness, peace, prosperity, and success. Despite our daily efforts, we often feel
                        something is missing in life. Delta Circle helps fill this void.</p>
                    <p class="center">So, what is the Delta Circle? It is a source of happiness, peace, prosperity, and
                        success that guides
                        our lives. The seven layers of the Delta Circle help evaluate our life and provide the right
                        direction to achieve true fulfillment.</p>
                    <p class="center"><b>Who can use Delta Circle?</b></p>
                    <p class="center">Delta Circle is beneficial for anyone working towards success, whether they are
                        students,
                        professionals, or business owners. It provides guidance on achieving objectives and personal growth.
                    </p>

                    <div class="center">
                        <a href="/delta" class="btn btn-default rounded-0">Read More</a>
                    </div>

                    <div class="mt-3">
                        <div class="animation image-container" data-animation="fadeInLeft" data-animation-delay="0.5s">
                            <img src="{{ asset('assets/images/group1.svg') }}" alt="image" class="zoom-img"
                                data-sound="{{ asset('assets/audio/lam.mpeg') }}" />

                            <img src="{{ asset('assets/images/group2.svg') }}" alt="image" class="zoom-img"
                                data-sound="assets/audio/vam.mpeg" />
                            <img src="{{ asset('assets/images/group3.svg') }}" alt="image" class="zoom-img"
                                data-sound="assets/audio/ram.mpeg" />
                            <img src="{{ asset('assets/images/group4.svg') }}" alt="image" class="zoom-img"
                                data-sound="assets/audio/yam.mpeg" />
                            <img src="{{ asset('assets/images/group5.svg') }}" alt="image" class="zoom-img"
                                data-sound="assets/audio/ham.mpeg" />
                            <img src="{{ asset('assets/images/group6.svg') }}" alt="image" class="zoom-img"
                                data-sound="assets/audio/aum.mpeg" />
                            <img src="{{ asset('assets/images/group7.svg') }}" alt="image" class="zoom-img"
                                data-sound="assets/audio/om.mpeg" />
                        </div>
                    </div>
                </div>

                <script>
                    document.querySelectorAll('.zoom-img').forEach(img => {
                        let audio = new Audio();

                        img.addEventListener('mouseenter', () => {
                            audio.src = img.getAttribute('data-sound');
                            audio.loop = true; // 🔁 Loop audio infinitely
                            audio.play();
                        });

                        img.addEventListener('mouseleave', () => {
                            audio.pause();
                            audio.currentTime = 0;
                        });
                    });
                </script>

                <style>
                    .image-container {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        flex-wrap: wrap;
                        gap: 15px;
                    }

                    .zoom-img {
                        transition: transform 0.5s ease-in-out;
                        will-change: transform;
                        cursor: pointer;
                    }

                    .zoom-img:hover {
                        animation: zoomInOut 1s infinite alternate;
                    }

                    @keyframes zoomInOut {
                        0% {
                            transform: scale(1.2);
                        }

                        100% {
                            transform: scale(1);
                        }
                    }
                </style>


            </div>

        </div>


    </section>
    <div class="banner_shape">
        <div class="shape1">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ asset('assets/images/Group-circle.png') }}" alt="image" class="r-link linear infinite" />
            </div>
        </div>
        <div class="shape2">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="{{ asset('assets/images/Group-blue.png') }}" alt="image" class="r-link linear infinite" />
            </div>
        </div>
    </div>
    {{-- <!-- END SECTION ABOUT --> --}}


    @if($store)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product_img">
                            <a href="{{ route('stores.single', $store->id) }}">
                                <img src="{{ $store->product_thumb ?? asset('assets/images/image_load.png') }}" alt="store" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @php
                            // Decode finance product JSON safely
                            $financeProducts = json_decode($store->finance_product, true) ?? [];

                            // Get selected country from cookie or set default
                            $countryName = $_COOKIE['selectedCountry'] ?? 'India';

                            // Find finance data for the selected country
                            $financeData = collect($financeProducts)->firstWhere('country_name', $countryName);

                            // Default values
                            $originalPrice = $store->price;
                            $discount = 0;
                            $finalPrice = $originalPrice;
                            $symbol = '';

                            if (!is_null($financeData) && is_array($financeData)) {
                                $originalPrice = $financeData['price'] ?? $store->price;
                                $discount = $financeData['discount'] ?? 0;
                                $symbol = $financeData['symbol'] ?? '';
                                $finalPrice = $originalPrice - ($originalPrice * $discount / 100);
                            }
                        @endphp

                        <div class="product_info">
                            <h3 class="product_title">{{ $store->product_name }}</h3>
                            <div class="prd-detail">
                                <span class="price">
                                    <del>{{ $symbol . number_format($originalPrice, 2) }}</del>
                                    <ins>{{ $symbol . number_format($finalPrice, 2) }}</ins>
                                </span>
                                <!-- <div class="rating">
                                                                            <div class="product_rate" style="width:80%"></div>
                                                                        </div> -->
                            </div>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel"
                                    aria-labelledby="Description-tab">
                                    <div>
                                        {!! $store->description !!}
                                    </div>
                                </div>
                            </div>

                            <div class="cart_extra" style="margin-top: 50px;">
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" name="quantity" id="quantity" value="1" title="Qty" class="qty"
                                            size="4">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div>
                                <div class="cart_btn">
                                    <button class="btn btn-default rounded-0 btn-addtocart add-to-cart-btn" type="button"
                                        data-id="{{ $store->id }}" data-name="{{ $store->product_name }}"
                                        data-thumb="{{ $store->product_thumb }}" data-price="{{ $originalPrice }}"
                                        data-discount="{{ $discount }}" data-finalprice="{{ $finalPrice }}"
                                        data-store="{{ $store }}">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="small_pt pb_70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading_s2 m-0">
                        <h4>Related Products</h4>
                    </div>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                @foreach ($latestStore as $key => $store)
                    @php
                        // Decode finance product JSON safely
                        $financeProducts = json_decode($store->finance_product, true) ?? [];

                        // Get selected country from cookie or set default
                        $countryName = $_COOKIE['selectedCountry'] ?? 'India';

                        // Find finance data for the selected country
                        $financeData = collect($financeProducts)->firstWhere('country_name', $countryName);

                        // Default values
                        $originalPrice = $store->price;
                        $discount = 0;
                        $finalPrice = $originalPrice;
                        $symbol = '';

                        if (!is_null($financeData) && is_array($financeData)) {
                            $originalPrice = $financeData['price'] ?? $store->price;
                            $discount = $financeData['discount'] ?? 0;
                            $symbol = $financeData['symbol'] ?? '';
                            $finalPrice = $originalPrice - ($originalPrice * $discount / 100);
                        }
                    @endphp

                    <div class="col-lg-3 col-sm-6">
                        <div class="product">
                            @if ($key % 2 == 0)
                                <span class="pr_flash">Sale</span>
                            @endif
                            <div class="product_img">
                                <a href="{{ route('stores.single', $store->id) }}">
                                    <img src="{{ $store->product_thumb }}" alt="store"
                                        onerror="this.onerror=null;this.src='{{ asset('assets/images/image_load.png') }}';" />
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="{{ route('stores.single', $store->id) }}"
                                                class="btn btn-default rounded-0 view-btn">View</a></li>
                                        <li style="margin-top: 10px;">
                                            <button class="btn btn-default rounded-0 add-to-cart-btn" data-id="{{ $store->id }}"
                                                data-name="{{ $store->product_name }}" data-thumb="{{ $store->product_thumb }}"
                                                data-price="{{ $originalPrice }}" data-discount="{{ $discount }}"
                                                data-finalprice="{{ $finalPrice }}" data-store="{{ $store }}">
                                                Add To Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title">
                                    <a href="{{ route('stores.single', $store->id) }}">{{ $store->product_name }}</a>
                                </h6>
                                <span class="price">
                                    <del>{{ $symbol . number_format($originalPrice, 2) }}</del>
                                    <ins>{{ $symbol . number_format($finalPrice, 2) }}</ins>
                                </span>
                                <!-- <div class="rating">
                                                                            <div class="product_rate" style="width:80%"></div>
                                                                        </div> -->
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- <!-- START SECTION CLASSES --> --}}
    <!-- <section class="pb_70">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                                                                                data-animation-delay="0.2s">
                                                                                <div class="heading_s1">
                                                                                    <span class="sub_heading">Choose Your Level Best</span>
                                                                                    <h2>Some Of Our Classes</h2>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                                                                                    magna aliqua enim. </p>
                                                                                <div class="small_divider clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                                                                    <div class="classes_img">
                                                                                        <img src="{{ asset('assets/images/classes_img1.jpg') }}" alt="image" />
                                                                                        <div class="link_container">
                                                                                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="classes_info">
                                                                                        <div class="classes_teacher">
                                                                                            <img src="{{ asset('assets/images/cl_teacher_img1.jpg') }}" alt="image" />
                                                                                            <span>Maria</span>
                                                                                        </div>
                                                                                        <div class="classes_title">
                                                                                            <span class="badge badge-pill badge-info">Hatha</span>
                                                                                            <h4><a href="#">Yoga For Beginners</a></h4>
                                                                                        </div>
                                                                                        <ul class="classes_schedule">
                                                                                            <li><i class="far fa-calendar"></i>Mon, Thu, Fri</li>
                                                                                            <li><i class="far fa-clock"></i>9:00 - 11:00</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                                                                                    <div class="classes_img">
                                                                                        <img src="{{ asset('assets/images/classes_img2.jpg') }}" alt="image" />
                                                                                        <div class="link_container">
                                                                                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="classes_info">
                                                                                        <div class="classes_teacher">
                                                                                            <img src="{{ asset('assets/images/cl_teacher_img2.jpg') }}" alt="image" />
                                                                                            <span>Elena</span>
                                                                                        </div>
                                                                                        <div class="classes_title">
                                                                                            <span class="badge badge-pill badge-success">Kundalini</span>
                                                                                            <h4><a href="#">Balance Body & Mind</a></h4>
                                                                                        </div>
                                                                                        <ul class="classes_schedule">
                                                                                            <li><i class="far fa-calendar"></i>Tue, Wed, Sat</li>
                                                                                            <li><i class="far fa-clock"></i>9:00 - 11:00</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                                                    <div class="classes_img">
                                                                                        <img src="{{ asset('assets/images/classes_img3.jpg') }}" alt="image" />
                                                                                        <div class="link_container">
                                                                                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="classes_info">
                                                                                        <div class="classes_teacher">
                                                                                            <img src="{{ asset('assets/images/cl_teacher_img3.jpg') }}" alt="image" />
                                                                                            <span>Regina</span>
                                                                                        </div>
                                                                                        <div class="classes_title">
                                                                                            <span class="badge badge-pill badge-danger">Pilates</span>
                                                                                            <h4><a href="#">Increased Flexibility</a></h4>
                                                                                        </div>
                                                                                        <ul class="classes_schedule">
                                                                                            <li><i class="far fa-calendar"></i>Mon, Thu, Fri</li>
                                                                                            <li><i class="far fa-clock"></i>11:00 - 12:00</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                                                                    <div class="classes_img">
                                                                                        <img src="{{ asset('assets/images/classes_img4.jpg') }}" alt="image" />
                                                                                        <div class="link_container">
                                                                                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="classes_info">
                                                                                        <div class="classes_teacher">
                                                                                            <img src="{{ asset('assets/images/cl_teacher_img4.jpg') }}" alt="image" />
                                                                                            <span>Dayna</span>
                                                                                        </div>
                                                                                        <div class="classes_title">
                                                                                            <span class="badge badge-pill badge-success">vinyasa</span>
                                                                                            <h4><a href="#">Improves Body Posture</a></h4>
                                                                                        </div>
                                                                                        <ul class="classes_schedule">
                                                                                            <li><i class="far fa-calendar"></i>Tue, Wed, Fri</li>
                                                                                            <li><i class="far fa-clock"></i>12:00 - 01:00</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                                                                                    <div class="classes_img">
                                                                                        <img src="{{ asset('assets/images/classes_img5.jpg') }}" alt="image" />
                                                                                        <div class="link_container">
                                                                                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="classes_info">
                                                                                        <div class="classes_teacher">
                                                                                            <img src="{{ asset('assets/images/cl_teacher_img1.jpg') }}" alt="image" />
                                                                                            <span>Maria</span>
                                                                                        </div>
                                                                                        <div class="classes_title">
                                                                                            <span class="badge badge-pill badge-danger">Alignment</span>
                                                                                            <h4><a href="#">Better Energy Flow</a></h4>
                                                                                        </div>
                                                                                        <ul class="classes_schedule">
                                                                                            <li><i class="far fa-calendar"></i>Mon, Thu, Fri</li>
                                                                                            <li><i class="far fa-clock"></i>11:00 - 12:00</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                                                    <div class="classes_img">
                                                                                        <img src="{{ asset('assets/images/classes_img6.jpg') }}" alt="image" />
                                                                                        <div class="link_container">
                                                                                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="classes_info">
                                                                                        <div class="classes_teacher">
                                                                                            <img src="{{ asset('assets/images/cl_teacher_img2.jpg') }}" alt="image" />
                                                                                            <span>Elena</span>
                                                                                        </div>
                                                                                        <div class="classes_title">
                                                                                            <span class="badge badge-pill badge-info">Yoga Dance</span>
                                                                                            <h4><a href="#">Increased body awareness</a></h4>
                                                                                        </div>
                                                                                        <ul class="classes_schedule">
                                                                                            <li><i class="far fa-calendar"></i>Mon, Thu, Fri</li>
                                                                                            <li><i class="far fa-clock"></i>9:00 - 11:00</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section> -->
    {{-- <!-- END SECTION CLASSES --> --}}

    {{-- <!-- START SECTION CLASSES TIMETABLE --> --}}
    <!-- <section>
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                                                                                data-animation-delay="0.2s">
                                                                                <div class="heading_s1">
                                                                                    <span class="sub_heading">Choose Your timing Schedule</span>
                                                                                    <h2>Our Classes Timetable</h2>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore
                                                                                    magna aliqua enim. </p>
                                                                                <div class="xs_divider clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12 text-center">
                                                                                <ul class="classes_filter animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                                                                    <li><a href="#" class="current" data-filter="all">All Classes</a></li>
                                                                                    <li><a href="#" data-filter="hatha">Hatha</a></li>
                                                                                    <li><a href="#" data-filter="kundalini">Kundalini</a></li>
                                                                                    <li><a href="#" data-filter="pilates">Pilates</a></li>
                                                                                    <li><a href="#" data-filter="alignment">Alignment</a></li>
                                                                                    <li><a href="#" data-filter="yoga-dance">Yoga Dance</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="schedule_table box_shadow1 table-responsive animation" data-animation="fadeInUp"
                                                                                    data-animation-delay="0.3s">
                                                                                    <table class="table table-bordered text-center">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <td>Time</td>
                                                                                                <td>Monday</td>
                                                                                                <td>Tuesday</td>
                                                                                                <td>Wednesday</td>
                                                                                                <td>Thursday</td>
                                                                                                <td>Friday</td>
                                                                                                <td>Saturday</td>
                                                                                                <td>Sunday</td>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>9:00AM</td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="hatha">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Hatha Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>9:00 - 10:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Maria</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>&nbsp;</td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="kundalini">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Kundalini Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>9:00 - 10:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Elena</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="pilates">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Pilates Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>9:00 - 10:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Regina</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="alignment">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Alignment Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>9:00 - 10:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Maria</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="pilates">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Pilates Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>9:00 - 10:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Regina</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>&nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>10:00AM</td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="pilates">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Pilates Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>10:00 - 11:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Regina</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="alignment">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Alignment Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>10:00 - 11:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Maria</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="yoga-dance">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Yoga Dance</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>10:00 - 11:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Elena</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>&nbsp;</td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="kundalini">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Kundalini Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>10:00 - 11:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Elena</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="hatha">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Hatha Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>10:00 - 11:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Maria</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="yoga-dance">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Yoga Dance</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>10:00 - 11:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Elena</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>11:00AM</td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="hatha">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Hatha Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>11:00 - 12:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Maria</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>&nbsp;</td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="pilates">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Pilates Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>11:00 - 12:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Regina</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="alignment">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Alignment Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>11:00 - 12:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Maria</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="yoga-dance">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Yoga Dance</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>11:00 - 12:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Elena</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="kundalini">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Kundalini Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>11:00 - 12:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Elena</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>&nbsp; </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>12:00AM</td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="pilates">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Pilates Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>12:00 - 01:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Regina</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="kundalini">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Kundalini Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>12:00 - 01:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Elena</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="hatha">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Hatha Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>12:00 - 01:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Maria</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>&nbsp;</td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="pilates">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Pilates Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>12:00 - 01:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Regina</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="alignment">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Alignment Yoga</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>12:00 - 01:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Maria</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div data-classes-schedule="yoga-dance">
                                                                                                        <div class="classes_title">
                                                                                                            <h6>Yoga Dance</h6>
                                                                                                        </div>
                                                                                                        <div class="classes_timing">
                                                                                                            <span>12:00 - 01:00</span>
                                                                                                        </div>
                                                                                                        <div class="cl_trainer">
                                                                                                            <span>Elena</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section> -->
    {{-- <!-- END SECTION CLASSES TIMETABLE --> --}}

    {{-- <!-- START SECTION PRICING TABLE --> --}}
    <section class="bg_light_yellow pb_0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-10 text-center animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="heading_s1">
                        <!-- <span class="sub_heading">We are available on</span> -->
                        <h2>We are available on</h2>
                    </div>

                    <p>iOS, Android and web platforms for seamless access to your meditation journey anytime, anywhere."</p>
                    <div class="small_divider clearfix"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/images/phone.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center mb-4 mb-lg-0">
                            <h2>Get Mobile Application &<br>Do Meditation Online !</h2>
                            <p style="margin-top: 10px;">A user-friendly app offering guided meditations, spiritual
                                workshop, and progress tracking to support your journey toward inner peace</p>
                            <h2>TEJAS Application</h2>

                            <!-- <h5>BeYoga Application</h5> -->
                            <div class="d-flex align-items-center justify-content-start " style="margin-top: 10px;">

                                <a href="https://play.google.com/store" target="_blank" style="margin-right: 20px;">
                                    <img src="{{ asset('assets/images/ic_playstore.png') }}" alt="Apple App Store"
                                        class="img-fluid store-btn" style="width: 250px; height: 70px;">
                                </a>
                                <a href="https://www.apple.com/app-store/" target="_blank">
                                    <img src="{{ asset('assets/images/ic_appstore.png') }}" alt="Google Play Store"
                                        class="img-fluid store-btn" style="width: 250px; height: 70px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                                                                            <div class="col-lg-4">
                                                                                <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp"
                                                                                    data-animation-delay="0.2s">
                                                                                    <div class="pr_title_wrap border-bottom">
                                                                                        <h4 class="pr_title">regular member</h4>
                                                                                        <div class="price_tage">
                                                                                            <h2>$49<span>/ Month</span></h2>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pr_content pt-3">
                                                                                        <ul class="list_none pr_list">
                                                                                            <li>Basic Options</li>
                                                                                            <li>Full Access</li>
                                                                                            <li>Customers Support</li>
                                                                                            <li>Free Updates</li>
                                                                                            <li>Advanced Options</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="pr_footer">
                                                                                        <a href="#" class="btn btn-dark rounded-0">Buy Now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp"
                                                                                    data-animation-delay="0.3s">
                                                                                    <div class="pricing_ribbon">Popular</div>
                                                                                    <div class="pr_title_wrap bg_default text_white">
                                                                                        <h4 class="pr_title">V.i.p Member</h4>
                                                                                        <div class="price_tage">
                                                                                            <h2>$99<span>/ Month</span></h2>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pr_content pt-3">
                                                                                        <ul class="list_none pr_list">
                                                                                            <li>Standard Options</li>
                                                                                            <li>Full Access</li>
                                                                                            <li>Customers Support</li>
                                                                                            <li>Free Updates</li>
                                                                                            <li>Advanced Options</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="pr_footer">
                                                                                        <a href="#" class="btn btn-default rounded-0">Buy Now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp"
                                                                                    data-animation-delay="0.4s">
                                                                                    <div class="pr_title_wrap border-bottom">
                                                                                        <h4 class="pr_title">Premium Member</h4>
                                                                                        <div class="price_tage">
                                                                                            <h2>$199<span>/ Month</span></h2>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pr_content pt-3">
                                                                                        <ul class="list_none pr_list">
                                                                                            <li>Unlimited Options</li>
                                                                                            <li>Full Access</li>
                                                                                            <li>Customers Support</li>
                                                                                            <li>Free Updates</li>
                                                                                            <li>Advanced Options</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="pr_footer">
                                                                                        <a href="#" class="btn btn-dark rounded-0">Buy Now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
        </div>
        <!-- <div class="shape_img">
                                                                        <div class="ol_shape8">
                                                                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                                                                <img src="{{ asset('assets/images/shape8.png') }}" alt="image" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="ol_shape9">
                                                                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                                                                <img src="{{ asset('assets/images/shape9.png') }}" alt="image" />
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
    </section>
    {{-- <!-- END SECTION PRICING TABLE --> --}}

    {{-- <!-- START SECTION TESTIMONIAL --> --}}
    <!-- <section>
                                                                <div class="container">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                                                                            data-animation-delay="0.2s">
                                                                            <div class="heading_s1">
                                                                                <span class="sub_heading">Testimonial</span>
                                                                                <h2>Our Client Say!</h2>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id
                                                                                varius nunc id varius nunc.</p>
                                                                            <div class="xs_divider clearfix d-none d-md-block"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                                                            <div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme"
                                                                                data-margin="15" data-loop="true" data-autoplay="true"
                                                                                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
                                                                                <div class="testimonial_box">
                                                                                    <div class="testi_meta">
                                                                                        <div class="testimonial_img">
                                                                                            <img src="{{ asset('assets/images/client_img1.jpg') }}" alt="client">
                                                                                        </div>
                                                                                        <div class="testi_user">
                                                                                            <h5>Merry Walter</h5>
                                                                                            <span>Web Designer</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="testi_desc">
                                                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                                                                            Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="testimonial_box">
                                                                                    <div class="testi_meta">
                                                                                        <div class="testimonial_img">
                                                                                            <img src="{{ asset('assets/images/client_img2.jpg') }}" alt="client">
                                                                                        </div>
                                                                                        <div class="testi_user">
                                                                                            <h5>Elena Mark</h5>
                                                                                            <span>Web Designer</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="testi_desc">
                                                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                                                                            Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="testimonial_box">
                                                                                    <div class="testi_meta">
                                                                                        <div class="testimonial_img">
                                                                                            <img src="{{ asset('assets/images/client_img3.jpg') }}" alt="client">
                                                                                        </div>
                                                                                        <div class="testi_user">
                                                                                            <h5>Calvin William</h5>
                                                                                            <span>Web Designer</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="testi_desc">
                                                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                                                                            Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="testimonial_box">
                                                                                    <div class="testi_meta">
                                                                                        <div class="testimonial_img">
                                                                                            <img src="{{ asset('assets/images/client_img4.jpg') }}" alt="client">
                                                                                        </div>
                                                                                        <div class="testi_user">
                                                                                            <h5>Maria Wolter</h5>
                                                                                            <span>Web Designer</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="testi_desc">
                                                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim
                                                                                            Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section> -->
    {{-- <!-- END SECTION TESTIMONIAL --> --}}

    {{-- <!-- START SECTION TEACHER --> --}}
    @if ($outTeams->count() > 0)
        <section class="bg_light_pink pb_70 section-application">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s">
                        <div class="heading_s1">
                            <h2>Our Tejas Team</h2>
                        </div>
                        <p>Our Tejas Team is passionate about innovation and excellence, working together to create impactful
                            solutions with trust and quality. 🚀</p>
                        <div class="small_divider clearfix"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme
                            {{ $outTeams->count() <= 2 ? 'justify-content-center' : 'justify-content-start' }}"
                            data-margin="15" data-loop="{{ $outTeams->count() >= 3 ? 'true' : 'false' }}" data-autoplay="false"
                            data-autoplay-timeout="2500" data-autoplay-speed="800" data-smart-speed="600"
                            data-autoplay-hover-pause="true" data-center="false" data-mouse-drag="false" data-touch-drag="false"
                            data-responsive='{"0":{"items":1}, "768":{"items":2}, "1199":{"items":3}, "1200":{"items":4}, "1400":{"items":5}}'>

                            @foreach ($outTeams->unique('id') as $ourTeam)
                                <div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                    <div class="team_bor">
                                        <div class="team_img">
                                            <img src="{{ $ourTeam->profile }}" alt="{{ $ourTeam->name }}"
                                                onerror="this.onerror=null;this.src='{{ asset('assets/images/event_loading.png') }}';">
                                            <ul class="list_none social_icons social_style1 rounded_social">
                                                @if ($ourTeam->facebook_url)
                                                    <li><a href="{{ $ourTeam->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                @endif
                                                @if ($ourTeam->twitter_url)
                                                    <li><a href="{{ $ourTeam->twitter_url }}"><i class="fab fa-x-twitter"></i></a></li>
                                                @endif
                                                @if ($ourTeam->google_url)
                                                    <li><a href="{{ $ourTeam->google_url }}"><i class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                @endif
                                                @if ($ourTeam->instagram_url)
                                                    <li><a href="{{ $ourTeam->instagram_url }}"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                @endif
                                                @if ($ourTeam->youtube_url)
                                                    <li><a href="{{ $ourTeam->youtube_url }}"><i class="fab fa-youtube"></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team_info flex items-center justify-center text-center">
                                        <div class="team_title">
                                            <h5><a href="{{ route('our-team-single', $ourTeam) }}">{{ $ourTeam->name }}</a></h5>
                                            <span>{{ $ourTeam->post }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    {{-- <!-- END SECTION TEACHER --> --}}

    {{-- <!-- START SECTION BLOG --> --}}
    @if ($blogs->count() > 0)
        <section class="pb_70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s">
                        <div class="heading_s1">
                            <span class="sub_heading">Our Letest Articles</span>
                            <h2>From Our Blog</h2>
                        </div>
                        <p>Discover insights, trends, and expert tips from our Tejas Team. Stay informed and inspired with every
                            post!</p>
                        <div class="small_divider clearfix"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                                <div class="blog_img">
                                    <a href="{{ route('blogs.single', $blog->id) }}">
                                        <img src="{{ $blog->thumb_image }}" alt="blog"
                                            onerror="this.onerror=null;this.src='{{ asset('assets/images/ic_blog_loading.png') }}';">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <h5 class="blog_title"><a href="{{ route('blogs.single', $blog->id) }}">{{ $blog->name }}</a>
                                    </h5>
                                    <ul class="list_none blog_meta">
                                        <li>
                                            <img src="{{ $blog->profile->profile ?? asset('assets/images/cl_teacher_img1.jpg') }}"
                                                alt="image"><span> {{ $blog->profile->name ?? 'N/A' }}</span>
                                        </li>
                                        <li>
                                            <i class="far fa-calendar"></i>
                                            <span class="blog-date">{{ $blog->formatted_date }}</span>
                                        </li>

                                    </ul>
                                    <style>
                                        .clamp-2-lines {
                                            display: -webkit-box;
                                            /* flexible box */
                                            -webkit-box-orient: vertical;
                                            -webkit-line-clamp: 2;
                                            /* limit to 2 lines */
                                            overflow: hidden;
                                            /* hide the rest */
                                            text-overflow: ellipsis;
                                            /* show ... */
                                            line-height: 1.5em;
                                            /* line height */
                                            max-height: 3em;
                                            /* 2 * line-height */
                                            white-space: normal;
                                        }
                                    </style>
                                    <div class="clamp-2-lines">
                                        {!! $blog->short_description !!}
                                    </div>
                                    <a href="{{ route('blogs.single', $blog->id) }}" class="blog_link">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{-- <!-- END SECTION BLOG --> --}}

    {{-- <!-- START SECTION Scroll --> --}}
    @if ($certificates->count() > 0)
        <section class="pb_70">
            <div class="relative overflow-hidden bg-gray-100 py-10">
                <div class="logo-carousel">
                    <div class="logo-track">
                        @if (count($certificates) === 1)
                            <div class="single-logo">
                                <img src="{{ $certificates[0]->image }}" class="logo-item" alt="Brand Logo">
                            </div>
                        @else
                            @foreach ($certificates as $img)
                                <img src="{{ $img->image }}" class="logo-item" class="logo-item" alt="Brand Logo">
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    <style>
        /* Container */
        .logo-carousel {
            width: 100%;
            overflow: hidden;
            position: relative;
            background-color: #f8f9fa;
            white-space: nowrap;
            padding: 10px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* If only one logo, center it */
        .single-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        /* Logo track for multiple logos */
        .logo-track {
            display: flex;
            align-items: center;
            gap: 40px;
            /* Adjust space between logos */
            width: max-content;
            animation: marquee 20s linear infinite;
        }

        /* Stop scrolling on hover */
        .logo-carousel:hover .logo-track {
            animation-play-state: paused;
        }

        /* Logo size */
        .logo-item {
            height: 60px;
            /* Adjust logo size */
            width: auto;
            object-fit: contain;
        }

        /* Scrolling animation for multiple logos */
        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }
    </style>

    {{-- <!-- END SECTION Scrol --> --}}

@endsection