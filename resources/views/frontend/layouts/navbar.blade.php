<header class="header_wrap fixed-top dark_skin main_menu_uppercase main_menu_weight_600 transparent_header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="logo_dark" src="assets/images/tejas_logo.png" alt="logo" width="195" height="55" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="dropdown">
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('schedule') ? 'active' : '' }}"
                            href="{{ route('schedule') }}">Schedule</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">About</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item {{ request()->is('about') ? 'active' : '' }}"
                                                    href="{{ route('about') }}">About
                                                    One</a></li>
                                            <li><a class="dropdown-item nav-link nav_item {{ request()->is('about-2') ? 'active' : '' }}"
                                                    href="{{ route('about-2') }}">About
                                                    Two</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Team</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="team.html">Team</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item" href="team-single.html">Team
                                                    Single</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler"
                                        href="#">Classes</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="classes.html">All
                                                    Classes</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="classes-details.html">Classes Details</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler"
                                        href="#">Events</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="events.html">All
                                                    Events</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="events-details.html">Events Details</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler"
                                        href="#">Gallery</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="gallery-three-columns.html">Grid 3 Columns</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="gallery-four-columns.html">Grid 4 Columns</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="gallery-masonry-three-columns.html">Masonry 3 Columns</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="gallery-masonry-four-columns.html">Masonry 4 Columns</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="gallery-detail.html">Gallery Detail</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="faq.html">FAQ</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html">Coming
                                        Soon</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Page</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-mega-menu">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Element</a>
                        <div class="dropdown-menu">
                            <ul class="mega-menu d-lg-flex">
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="accordions.html"><i
                                                    class="ti-layout-accordion-separated"></i> Accordions</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="blockquotes.html"><i
                                                    class="ti-quote-left"></i> Blockquotes</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="buttons.html"><i
                                                    class="ti-mouse"></i> Buttons</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="call-to-action.html"><i
                                                    class="ti-headphone-alt"></i> Call
                                                to Action</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="columns.html"><i
                                                    class="ti-layout-column3-alt"></i> Columns</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="countdown.html"><i
                                                    class="ti-alarm-clock"></i> Countdown</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="counter.html"><i
                                                    class="ti-timer"></i> Counters</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="form-controls.html"><i
                                                    class="ti-clipboard"></i> Form
                                                Controls</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="heading.html"><i
                                                    class="ti-text"></i> Heading</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="highlights.html"><i
                                                    class="ti-underline"></i> Highligts</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="icon-boxes.html"><i
                                                    class="ti-widget"></i> Icon Boxes</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="lists.html"><i
                                                    class="ti-list"></i> Lists</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="maps.html"><i
                                                    class="ti-map-alt"></i> Maps</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="pricing-table.html"><i
                                                    class="ti-layout-column3"></i>
                                                Pricing Table</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="progress-bars.html"><i
                                                    class="ti-layout-list-post"></i>
                                                Progress Bars</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="subscribe.html"><i
                                                    class="ti-bookmark"></i> Subscribe</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="tab.html"><i
                                                    class="ti-layout-accordion-separated"></i> Tab</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="testimonial.html"><i
                                                    class="ti-layout-slider-alt"></i> Testimonials</a></li>
                                        <li><a class="dropdown-item nav-link nav_item"
                                                href="tooltips-popovers.html"><i class="ti-comment-alt"></i>
                                                Tooltip Popovers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Blog
                                        Layout</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-standard-left-sidebar.html">Blog Standard Left
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-standard-right-sidebar.html">Blog Standard Right
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-three-columns.html">Blog 3 Columns </a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-four-columns.html">Blog 4 Columns</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Blog
                                        Masonry</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-masonry-three-columns.html">Masonry 3 Columns</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-masonry-four-columns.html">Masonry 4 Columns</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-masonry-left-sidebar.html">Masonry Left Sidebar</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-masonry-right-sidebar.html">Masonry Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Blog
                                        List</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-list-right-sidebar.html">Right Sidabar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Sinlge
                                        Post</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-single.html">Default</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-single-slider.html">Slider Post</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-single-video.html">Video post</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="blog-single-audio.html">Audio Post</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Shop</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="shop.html">Shop List</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="product-details.html">Product
                                        Detail</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="cart.html">Cart</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="fa fa-search"></i></a>
                    <div class="search-overlay">
                        <div class="search_wrap">
                            <form>
                                <div class="rounded_input">
                                    <input type="text" placeholder="Search" class="form-control"
                                        id="search_input">
                                </div>
                                <button type="submit" class="search_icon"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="dropdown cart_wrap">
                    <a class="nav-link" href="#" data-toggle="dropdown"><i class="fa-solid fa-cart-shopping"></i><span
                            class="cart_count">2</span></a>
                    <div class="cart_box dropdown-menu dropdown-menu-right">
                        <ul class="cart_list">
                            <li>
                                <a href="#" class="item_remove"><i class="fa fa-times"></i></a>
                                <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">yoga
                                    mat For Exercises</a>
                                <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                            class="price_symbole">$</span>23.00</span>
                                </span>
                            </li>
                            <li>
                                <a href="#" class="item_remove"><i class="fa fa-times"></i></a>
                                <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Running
                                    Shoes</a>
                                <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                            class="price_symbole">$</span>45.00</span>
                                </span>
                            </li>
                        </ul>
                        <div class="cart_footer">
                            <p class="cart_total">Total: <span class="cart_amount"> <span
                                        class="price_symbole">$</span>68.00</span>
                            </p>
                            <p class="cart_buttons"><a href="cart.html"
                                    class="btn btn-default rounded-0 view-cart">View Cart</a><a href="checkout.html"
                                    class="btn btn-dark rounded-0 checkout">Checkout</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
