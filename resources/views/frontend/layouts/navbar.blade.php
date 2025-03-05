<!-- ✅ New Div Added Above Navbar -->
<div class="fixed-top top-bar transparent_header">
    <p class="offer-text">Special Offer: Get 20% Off on All Products! Limited Time Only.</p>
    
    <!-- ✅ Country Dropdown -->
    <div class="country-dropdown">
        <select id="countrySelect">
            <option value="India">🇮🇳 India</option>
            <option value="United States">🇺🇸 United States</option>
            <option value="Canada">🇨🇦 Canada</option>
        </select>
    </div>
</div>
<script>
// Function to set a cookie
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + "; path=/" + expires;
}

// Function to get a cookie value
function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i].trim();
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Set the selected country from cookie when page loads
document.addEventListener("DOMContentLoaded", function() {
    let savedCountry = getCookie("selectedCountry");

    if (savedCountry) {
        document.getElementById("countrySelect").value = savedCountry;
    } else {
        // Set a default country if no cookie exists
        let defaultCountry = "India"; // Change this to your preferred default
        document.getElementById("countrySelect").value = defaultCountry;
        setCookie("selectedCountry", defaultCountry, 30); // Save the default selection
    }
});

// Save selected country in cookies when changed
document.getElementById("countrySelect").addEventListener("change", function() {
    let selectedCountry = this.value;
    setCookie("selectedCountry", selectedCountry, 30); // Save for 30 days
    let currentPage = window.location.pathname;

    // Define pages where the form should load
    let allowedPages = ["/","/stores"];
        if (allowedPages.includes(currentPage) || currentPage.startsWith("/stores/")) {

        location.reload(); // Refresh the page
    }
});
</script>

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
                        <a class="nav-link {{ request()->is('events') ? 'active' : '' }}"
                            href="{{ route('events') }}">Programs</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger" title="search"><i
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

                @if (Auth::guard('customer')->check())
                    <li>
                        <a class="nav-link px-2 {{ request()->is('user.profile') ? 'active' : '' }}"
                            href="{{ route('user.profile') }}" title="Profile"><i class="fas fa-user-edit"></i></a>
                    </li>
                    <li>
                        <a class="nav-link px-2 {{ request()->is('user.orders') ? 'active' : '' }}"
                            href="{{ route('user.orders') }}" title="Order-History"><i class="fas fa-receipt"></i></a>
                    </li>
                    <li>
                        <a class="nav-link px-2" href="#" id="logoutBtn" title="Logout"><i
                                class="fas fa-power-off"></i></a>
                        <form id="logoutForm" action="{{ route('user.logout') }}" method="POST" class="d-none">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link"><i
                                    class="fas fa-power-off"></i></button>
                        </form>
                    </li>
                @else
                    <li>
                        <a class="nav-link" href="{{ route('user.login') }}"><i class="fa-solid fa-user"></i></a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</header>
