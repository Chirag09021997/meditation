{{-- <!-- START FOOTER --> --}}
<footer class="bg_dark footer_dark">

    <style>
        .security {
            display: flex;
            gap: 20px;
            /* spacing between icons */
            justify-content: start;
            margin-left: 49px;
            margin-top: 20px;
            /* center the icons horizontally */
            align-items: center;
            padding: 10px 0;
        }

        .security li {
            list-style: none;
        }

        .security i {
            font-size: 22px;
            /* increase icon size */
            color: #ffffff;
            /* change this color as needed */
            transition: transform 0.3s ease;
        }

        .security i:hover {
            transform: scale(1.2);
            /* optional hover effect */
            color: #007bff;
            /* optional hover color */
        }
    </style>


    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-7 mb-4 mb-lg-0">
                    <h5 class="widget_title">Abouts us</h5>
                    <div class="footer_desc">
                        <p>We are committed to excellence, innovation, and growth. Our team strives to deliver quality
                            and value in everything we do.</p>
                    </div>
                    <ul class="contact_info list_none">
                        <li>
                            <i class="fas fa-map-marker-alt "></i>
                            <address>{{ $settings['address'] ?? '' }}</address>
                        </li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>
                            <a href="tel:{{ $settings['mobile_no'] ?? '' }}">{{ $settings['mobile_no'] ?? '' }}</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:{{ $settings['mail'] ?? '' }}">{{ $settings['mail'] ?? '' }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-5 mb-4 mb-lg-0">
                    <h5 class="widget_title">Quick Links</h5>
                    <ul class="list_none widget_links links_style2">
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-7 mb-4 mb-md-0">
                    <!-- <h5 class="widget_title">Letest Post</h5>
                    <ul class="recent_post border_bottom_dash list_none">
                        <li>
                            <div class="post_footer">
                                <div class="post_content">
                                    <h6><a href="#">Lorem ipsum dolor sit amet nullam consectetur adipiscing elit.</a>
                                    </h6>
                                    <span class="post_date"><i class="ion-android-time"></i>April 14, 2018</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post_footer">
                                <div class="post_content">
                                    <h6><a href="#">Lorem ipsum dolor sit amet nullam consectetur adipiscing elit.</a>
                                    </h6>
                                    <span class="post_date"><i class="ion-android-time"></i>April 14, 2018</span>
                                </div>
                            </div>
                        </li>
                    </ul> -->
                </div>
                <div class="col-lg-4 col-md-5">
                    <!-- <h5 class="widget_title">Subscribe Newsletter</h5>
                    <div class="newsletter_form mb-4 mb-lg-5">
                        <form>
                            <input type="text" class="form-control rounded-0" required=""
                                placeholder="Enter Email Address">
                            <button type="submit" title="Subscribe" class="btn btn-default rounded-0" name="submit"
                                value="Submit"><i class="ion-paper-airplane"></i></button>
                        </form>
                    </div> -->
                    <h5 class="widget_title">Stay Connected</h5>
                    <ul class="list_none social_icons radius_social">
                        <li>
                            <a href="{{ $settings['facebook_url'] ?? '' }}" class="sc_facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings['twitter_url'] ?? '' }}" class="sc_twitter" target="_blank" >
                                <i class="fab fa-x-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings['google_url'] ?? '' }}" class="sc_google" target="_blank">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings['instagram_url'] ?? '' }}" class="sc_instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings['pinterest_url'] ?? '' }}" class="sc_pinterest" target="_blank">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="security list_none">
                        <li><i class="fas fa-credit-card"></i></li>
                        <li><i class="fab fa-paypal"></i></li>
                        <li><i class="fas fa-lock"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="bottom_footer border_top_transparent">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="copyright m-md-0 text-center text-md-left">
                                Copyright © <span id="currentYear"></span> - Made By codeshopstudio</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list_none footer_link text-center text-md-right">
                                <li><a href="{{ route('term.condition') }}">Terms & Condition</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('refund.policy') }}">Cancellation Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape_img">
        <div class="ol_shape10">
            <img src="{{ env('APP_URL') }}/assets/images/shape7.png" alt="shape36" />
        </div>
    </div>
</footer>
{{-- <!-- END FOOTER --> --}}

<a href="#" class="scrollup" style="display: none;"><i class="fa-solid fa-up-long"></i></a>

{{-- <!-- Latest jQuery --> --}}
<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
{{-- <!-- jquery-ui js --> --}}
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
{{-- <!-- popper min js --> --}}
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
{{-- <!-- Latest compiled and minified Bootstrap --> --}}
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
{{-- <!-- owl-carousel min js  --> --}}
<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
{{-- <!-- magnific-popup min js  --> --}}
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
{{-- <!-- waypoints min js  --> --}}
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
{{-- <!-- parallax js  --> --}}
<script src="{{ asset('assets/js/parallax.js') }}"></script>
{{-- <!-- jquery dd js  --> --}}
<script src="{{ asset('assets/js/jquery.dd.min.js') }}"></script>
{{-- <!-- countdown js  --> --}}
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
{{-- <!-- jquery.counterup.min js --> --}}
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
{{-- <!-- jquery.parallax-scroll js --> --}}
<script src="{{ asset('assets/js/jquery.parallax-scroll.js') }}"></script>
{{-- <!-- fit video  --> --}}
<script src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
{{-- <!-- imagesloaded js --> --}}
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
{{-- <!-- isotope min js --> --}}
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
{{-- <!-- cookie js --> --}}
<script src="{{ asset('assets/js/js.cookie.js') }}"></script>
{{-- <!-- scripts js --> --}}
<script src="{{ asset('assets/js/scripts.js') }}"></script>
{{-- <!-- custom js --> --}}
<script src="{{ asset('assets/js/custom.js') }}"></script>