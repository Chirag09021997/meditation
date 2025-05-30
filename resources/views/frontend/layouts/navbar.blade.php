<script>
    function changeCountry(code) {
        document.cookie = "selectedCountry=" + code + "; path=/; max-age=" + (60 * 60 * 24 * 30); // Store for 30 days
        if (code == "India") {
            code = "in";
        } else if (code == "United States") {
            code = "us";
        } else if (code == "Canada") {
            code = "ca";
        }
        document.getElementById("selectedFlag").src = "https://flagcdn.com/w40/" + code + ".png";

        let currentPage = window.location.pathname;

        // Define pages where the form should load
        let allowedPages = ["/", "/stores", "/checkout"];
        if (allowedPages.includes(currentPage) || currentPage.startsWith("/stores/")) {

            location.reload(); // Refresh the page
        }
    }

    function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    // Set the selected country from cookie when page loads
    document.addEventListener("DOMContentLoaded", function () {
        let savedCountry = getCookie("selectedCountry") || "India";
        let code = "in"
        if (savedCountry === "India") {
            code = "in";
        } else if (savedCountry === "United States") {
            code = "us";
        } else if (savedCountry === "Canada") {
            code = "ca";
        } else {
            code = "in"; // Default fallback
        }

        if (savedCountry) {
            document.getElementById("selectedFlag").src = "https://flagcdn.com/w40/" + code + ".png";
        } else {
            // Set a default country if no cookie exists
            let defaultCountry = "India"; // Change this to your preferred default
            document.getElementById("selectedFlag").src = "https://flagcdn.com/w40/" + code + ".png";
            setCookie("selectedCountry", defaultCountry, 30); // Save the default selection
        }
    });

    // Save selected country in cookies when changed
    document.getElementById("countrySelect").addEventListener("change", function () {
        let selectedCountry = this.value;
        setCookie("selectedCountry", selectedCountry, 30); // Save for 30 days
        let currentPage = window.location.pathname;

        // Define pages where the form should load
        let allowedPages = ["/", "/stores"];
        if (allowedPages.includes(currentPage) || currentPage.startsWith("/stores/")) {

            location.reload(); // Refresh the page
        }
    });
</script>
<!-- bg-dark -->
<header class="header_wrap fixed-top dark_skin main_menu_uppercase main_menu_weight_600 transparent_header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="logo_dark img-fluid" src="{{ asset('assets/images/tejas_logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="fa-solid fa-bars"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @if (Auth::guard('customer')->check())
                        <li>
                            <a class="nav-link {{ request()->is('user.profile') ? 'active' : '' }}"
                                href="{{ route('user.profile') }}" title="Profile">My Profile<i class="fas"></i></a>
                        </li>
                        <li>
                            <a class="nav-link {{ request()->is('user.orders') ? 'active' : '' }}"
                                href="{{ route('user.orders') }}" title="Order-History">Orders<i class="fas"></i></a>
                        </li>
                    @endif
                    <li>
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('stores') ? 'active' : '' }}"
                            href="{{ route('stores') }}">Store</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('blogs') ? 'active' : '' }}"
                            href="{{ route('blogs') }}">Blog</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is(patterns: 'events') ? 'active' : '' }}"
                            href="{{ route('events') }}">Events</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                    @if (Auth::guard('customer')->check())
                        <li>
                            <a class="nav-link" href="#" id="logoutBtn" title="Logout">Logout<i class="fas"></i></a>
                            <form id="logoutForm" action="{{ route('user.logout') }}" method="POST" class="d-none">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link"><i
                                        class="fas fa-power-off"></i></button>
                            </form>
                        </li>
                    @endif


                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center h-50px mt-1 mt-sm-0" >
                <!-- <li><a href="javascript:void(0);" class="nav-link search_trigger" title="search"><i
                            class="fa fa-search"></i></a>
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
                </li> -->
                <li class="dropdown cart_wrap">
                    <a class="nav-link" href="#" data-toggle="dropdown"><i class="fa-solid fa-cart-shopping"></i><span
                            class="cart_count">2</span></a>
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

                @if (!Auth::guard('customer')->check())
                    <li>
                        <a class="nav-link" href="{{ route('user.login') }}"><i class="fa-solid fa-user"></i></a>
                    </li>
                @endif

                <li class="dropdown">
                    <a class="nav-link position-relative" href="#" data-toggle="dropdown">
                        <img id="selectedFlag"
                            src="https://flagcdn.com/w40/{{ isset($_COOKIE['selectedCountry']) ? strtolower($_COOKIE['selectedCountry']) : 'in' }}.png"
                            style="width: 20px; height: 20px; object-fit: cover; border-radius: 3px;margin-top:-5px !important;">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right right-0 z-1 position-absolute">
                        <a class="dropdown-item" href="#" onclick="changeCountry('India')">
                            <img src="https://flagcdn.com/w40/in.png"
                                style="width: 24px; height: 24px; object-fit: cover; margin-right: 8px;">
                            India
                        </a>
                        <a class="dropdown-item" href="#" onclick="changeCountry('United States')">
                            <img src="https://flagcdn.com/w40/us.png"
                                style="width: 24px; height: 24px; object-fit: cover; margin-right: 8px;">
                            United States
                        </a>
                        <a class="dropdown-item" href="#" onclick="changeCountry('Canada')">
                            <img src="https://flagcdn.com/w40/ca.png"
                                style="width: 24px; height: 24px; object-fit: cover; margin-right: 8px;">
                            Canada
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>