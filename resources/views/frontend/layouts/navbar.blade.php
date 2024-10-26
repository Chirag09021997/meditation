<header class="header_wrap fixed-top dark_skin main_menu_uppercase main_menu_weight_600 transparent_header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="logo_dark" src="{{ asset('assets/images/tejas_logo.png') }}" alt="logo" width="195"
                    height="55" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('schedule') ? 'active' : '' }}"
                            href="{{ route('schedule') }}">Schedule</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('events') ? 'active' : '' }}"
                            href="{{ route('events') }}">Event</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('blogs') ? 'active' : '' }}"
                            href="{{ route('blogs') }}">Blog</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('stores') ? 'active' : '' }}"
                            href="{{ route('stores') }}">Store</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="fa fa-search"></i></a>
                    <div class="search-overlay">
                        <div class="search_wrap">
                            <form>
                                <div class="rounded_input">
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">
                                </div>
                                <button type="submit" class="search_icon"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="dropdown cart_wrap">
                    <a class="nav-link" href="#" data-toggle="dropdown"><i
                            class="fa-solid fa-cart-shopping"></i><span class="cart_count">2</span></a>
                    <div class="cart_box dropdown-menu dropdown-menu-right">
                        <ul class="cart_list">
                            <li>
                                <a href="#" class="item_remove"><i class="fa fa-times"></i></a>
                                <a href="#"><img src="{{ asset('assets/images/cart_thamb1.jpg') }}"
                                        alt="cart_thumb1">yoga
                                    mat For Exercises</a>
                                <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                            class="price_symbole">$</span>23.00</span>
                                </span>
                            </li>
                            <li>
                                <a href="#" class="item_remove"><i class="fa fa-times"></i></a>
                                <a href="#"><img src="{{ asset('assets/images/cart_thamb2.jpg') }}"
                                        alt="cart_thumb2">Running
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
                            <p class="cart_buttons">
                                <a href="{{ route('cart') }}" class="btn btn-default rounded-0 view-cart">View Cart</a>
                                <a href="{{ route('checkout') }}" class="btn btn-dark rounded-0 checkout">Checkout</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
