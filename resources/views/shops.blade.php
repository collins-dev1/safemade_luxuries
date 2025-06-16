<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/shop-fullwidth.html   11 Nov 2019 12:39:03 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Safemade Luxuries</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('landing/assets/images/logo/SelfmadeLuxuries.jpg') }}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins.css') }}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/responsive.css') }}">
</head>

<body class="template-collection belle">
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value=""
                        placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                        <a href="tel:+2349032409911" target="_blank">
                            <p class="phone-no"><i class="anm anm-phone-s"></i> +234 903 240 9911</p>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                        </div>
                    </div>
                    @auth
                        @if (Auth::user()->usertype == 0)
                            <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                                <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                                        aria-hidden="true"></i></span>
                                <ul class="customer-links list-inline text-center">
                                    <h6 style="text-align: center; color: #4a6cf7">Welcome <span class="wave">👋</span>
                                        {{ Auth::user()->name }}</h6>
                                    <li><a href="#"><i class="fas fa-user mr-2"></i> Profile</a></li>
                                    <li><a href="#"><i class="fas fa-edit mr-2"></i> Edit Account</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    @else
                        <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                            <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                                    aria-hidden="true"></i></span>
                            <ul class="customer-links list-inline">
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Create Account</a></li>
                            </ul>
                        </div>
                    @endauth

                </div>
            </div>
        </div>
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap classicHeader animated d-flex">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('landing/assets/images/logo/mainSelfmadeLuxuries.png') }}"
                                alt="Selfmade Luxuries" title="Selfmade Luxuries" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="{{ url('/') }}">Home <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent megamenu"><a href="{{ route('shops') }}">Shop <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent megamenu"><a href="#">Products <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <div class="megamenu style2">
                                        <ul class="grid mmWrapper">
                                            <li class="grid__item one-whole">
                                                <ul class="grid">
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Page</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="product-layout-1.html"
                                                                    class="site-nav lvl-2">Cloths</a></li>
                                                            <li class="lvl-2"><a href="product-layout-2.html"
                                                                    class="site-nav lvl-2">Shoes</a></li>
                                                            <li class="lvl-2"><a href="product-layout-3.html"
                                                                    class="site-nav lvl-2">Jewellery</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="grid__item large-up--one-whole imageCol"><a href="#"><img
                                                        src="assets/images/megamenu-bg2.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">Pages <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('checkout') }}" class="site-nav">Checkout</a></li>
                                        <li><a href="{{ route('aboutus') }}" class="site-nav">About Us <span
                                                    class="lbl nm_label1">New</span> </a></li>
                                        <li><a href="{{ route('contactus') }}" class="site-nav">Contact Us</a></li>
                                        <li><a href="{{ route('faq') }}" class="site-nav">FAQs</a></li>
                                        <li><a href="{{ route('comingsoon') }}" class="site-nav">Coming soon <span
                                                    class="lbl nm_label1">New</span> </a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="{{ route('blog') }}">Blog <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('landing/assets/images/logo/mainSelfmadeLuxuries.png') }}"
                                    alt="Selfmade Luxuries" title="Selfmade Luxuries" />
                            </a>
                        </div>
                    </div>
                    @include('sweetalert::alert')
                    <!--Mobile Logo-->
                    @php
                        $cart = session('cart', []);
                        $cartCount = count($cart);
                        $cartTotal = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
                    @endphp

                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="{{ route('cart.view') }}" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">
                                    {{ $cartCount }}
                                </span>
                            </a>

                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    @forelse($cart as $id => $item)
                                        <li class="item">
                                            <a class="product-image" href="#">
                                                <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}"
                                                    title="" />
                                            </a>
                                            <div class="product-details">
                                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="remove"><i class="anm anm-times-l"
                                                            aria-hidden="true"></i></button>
                                                </form>

                                                <a class="pName" href="#">{{ $item['name'] }}</a>
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <span class="label">Qty:</span>
                                                        <input type="text" value="{{ $item['quantity'] }}"
                                                            class="product-form__input qty" readonly>
                                                    </div>
                                                </div>
                                                <div class="priceRow">
                                                    <div class="product-price">
                                                        <span
                                                            class="money">₦{{ number_format($item['price'], 2) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <li class="item">Your cart is empty.</li>
                                    @endforelse
                                </ul>

                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span>
                                        <span class="product-price">
                                            <span class="money">₦{{ number_format($cartTotal, 2) }}</span>
                                        </span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="{{ route('cart.view') }}" class="btn btn-secondary btn--small">View
                                            Cart</a>
                                        <a href="{{ route('cart.view') }}"
                                            class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Minicart Popup-->
                        </div>

                        <div class="site-header__search">
                            <button type="button" class="search-trigger"><i
                                    class="icon anm anm-search-l"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="{{ url('/') }}">Home</a>
                </li>
                <li class="lvl1 parent megamenu"><a href="{{ route('shops') }}">Shop</a>
                </li>
                <li class="lvl1 parent megamenu"><a href="">Products <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="" class="site-nav">Product Page<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-layout-1.html" class="site-nav">Shoes</a></li>
                                <li><a href="product-layout-2.html" class="site-nav">Cloths</a></li>
                                <li><a href="product-layout-3.html" class="site-nav">Jewellery</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="">Pages <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="{{ route('checkout') }}" class="site-nav">Checkout</a></li>
                        <li><a href="{{ route('aboutus') }}" class="site-nav">About Us<span
                                    class="lbl nm_label1">New</span></a></li>
                        <li><a href="{{ route('contactus') }}" class="site-nav">Contact Us</a></li>
                        <li><a href="{{ route('faq') }}" class="site-nav">FAQs</a></li>
                        <li><a href="{{ route('comingsoon') }}" class="site-nav">Coming soon<span
                                    class="lbl nm_label1">New</span></a></li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="{{ route('blog') }}">Blog</a>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--Collection Banner-->
            <div class="collection-header">
                <div class="collection-hero">
                    <div class="collection-hero__image"><img class="blur-up lazyload"
                            data-src="{{ asset('landing/assets/images/banner1.jpg') }}"
                            src="{{ asset('landing/assets/images/banner2.jpg') }}" alt="Women" title="Women" />
                    </div>
                    <div class="collection-hero__title-wrapper">
                        <h1 class="collection-hero__title page-width">Shops</h1>
                    </div>
                </div>
            </div>
            <!--End Collection Banner-->

            <div class="container-fluid">
                <div class="row">
                    <!--Sidebar-->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 sidebar filterbar">
                        <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i>
                        </div>
                        <div class="sidebar_tags">
                            <!--Categories-->
                            <div class="sidebar_widget categories filter-widget">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <div class="widget-content">
                                    <ul class="sidebar_categories">
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">Clothing</a>
                                            <ul class="sublinks">
                                                <li class="level2"><a href="#;" class="site-nav">Men</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Women</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Child</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">View All
                                                        Clothing</a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">Jewellery</a>
                                            <ul class="sublinks">
                                                <li class="level2"><a href="#;" class="site-nav">Ring</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Neckalses</a>
                                                </li>
                                                <li class="level2"><a href="#;" class="site-nav">Eaarings</a>
                                                </li>
                                                <li class="level2"><a href="#;" class="site-nav">View All
                                                        Jewellery</a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Shoes</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Accessories</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Collections</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Sale</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Page</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Popular Products-->
                            <!--Banner-->
                            <div class="sidebar_widget static-banner">
                                <img src="{{ asset('landing/assets/images/banner4.jpg') }}" alt="" />
                            </div>
                            <!--Banner-->
                            <!--Information-->
                            <div class="sidebar_widget">
                                <div class="widget-title">
                                    <h2>Information</h2>
                                </div>
                                <div class="widget-content">
                                    <p>Use this text to share information about your brand with your customers. Describe
                                        a product, share announcements, or welcome customers to your store.</p>
                                </div>
                            </div>
                            <!--end Product Tags-->
                        </div>
                    </div>
                    <!--End Sidebar-->
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-10 main-col">
                        <div class="productList">
                            <!--Toolbar-->
                            <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product
                                Filters</button>

                            <!--End Toolbar-->
                            <div class="grid-products grid--view-items">
                                <style>
                                    .grid-view-item__link {
                                        width: 100% !important;
                                        height: 300px !important;
                                    }

                                    .grid-view-item__link img {
                                        width: 100% !important;
                                        height: 100% !important;
                                        object-fit: cover;
                                    }
                                </style>
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">

                                            <div class="grid-view_image">
                                                <!-- start product image -->
                                                <a href="product-accordion.html" class="grid-view-item__link">
                                                    <!-- image -->
                                                    <img class="grid-view-item__image primary blur-up lazyload"
                                                        data-src="{{ $product->product_photo }}"
                                                        src="{{ $product->product_photo }}" alt="image"
                                                        title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="grid-view-item__image hover blur-up lazyload"
                                                        data-src="{{ $product->product_photo2 }}"
                                                        src="{{ $product->product_photo2 }}" alt="image"
                                                        title="product">
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels rectangular"><span
                                                            class="lbl on-sale">-16%</span> <span
                                                            class="lbl pr-label1">new</span></div>
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->

                                                <!--start product details -->
                                                <div class="product-details hoverDetails text-center mobile">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="#">{{ $product->product_title }}</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span
                                                            class="old-price">&#8358;{{ $product->product_oldprice }}</span>
                                                        <span
                                                            class="price">&#8358;{{ $product->product_newprice }}</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                    <!-- product button -->
                                                    <div class="button-set">
                                                        <!-- Start product button -->
                                                        <form action="{{ route('cart.add') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <button class="btn btn--secondary cartIcon btn-addto-cart"
                                                                type="submit"><i
                                                                    class="icon anm anm-bag-l"></i></button>
                                                        </form>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- End product details -->
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </div>
        </div>
        <!--End Body Content-->

        <!--Footer-->
        <footer id="footer">
            <div class="newsletter-section">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input"
                                                name="EMAIL" value="" placeholder="Email address"
                                                required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit"
                                                    id="Subscribe"><span
                                                        class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank"
                                            title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i
                                                class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank"
                                            title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i
                                                class="icon icon-twitter"></i> <span
                                                class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank"
                                            title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i
                                                class="icon icon-instagram"></i> <span
                                                class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank"
                                            title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i
                                                class="icon icon-youtube"></i> <span
                                                class="icon__fallback-text">YouTube</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer">
                <div class="container">
                    <!--Footer Links-->
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Quick Shop</h4>
                                <ul>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Sportswear</a></li>
                                    <li><a href="#">Sale</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Informations</h4>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms &amp; condition</a></li>
                                    <li><a href="#">My Account</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Customer Services</h4>
                                <ul>
                                    <li><a href="#">Request Personal Data</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                                <h4 class="h4">Contact Us</h4>
                                <ul class="addressFooter">
                                    <li><i class="icon anm anm-map-marker-al"></i>
                                        <p>Number 45 Prince<br>by Diamond plaza onitsha anambra state</p>
                                    </li>
                                    <li class="phone"><i class="icon anm anm-phone-s"></i>
                                        <p>+234 903 240 9911</p>
                                    </li>
                                    <li class="email"><i class="icon anm anm-envelope-l"></i>
                                        <p>support@yousite.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Footer Links-->
                    <hr>
                    <div class="footer-bottom">
                        <div class="row">
                            <!--Footer Copyright-->
                            <div
                                class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left">
                                <span></span> <a href="https://ogcollins.com" target="_blank">Designed by
                                    ogcollins</a>
                            </div>
                            <!--End Footer Copyright-->
                            <!--Footer Payment Icon-->
                            <div
                                class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                                <ul class="payment-icons list--inline">
                                    <li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <!--End Footer Payment Icon-->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer-->

        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!--Quick View popup-->
        <div class="modal fade quick-view-popup" id="content_quickview">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="ProductSection-product-template" class="product-template__container prstyle1">
                            <div class="product-single">
                                <!-- Start model close -->
                                <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right"
                                    title="close"><span class="icon icon anm anm-times-l"></span></a>
                                <!-- End model close -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product-details-img">
                                            <div class="pl-20">
                                                <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product-single__meta">
                                            <h2 class="product-single__title">Product Quick View Popup</h2>
                                            <div class="prInfoRow">
                                                <div class="product-stock"> <span class="instock ">In Stock</span>
                                                    <span class="outstock hide">Unavailable</span>
                                                </div>
                                                <div class="product-sku">SKU: <span
                                                        class="variant-sku">19115-rdxs</span></div>
                                            </div>
                                            <p class="product-single__price product-single__price-product-template">
                                                <span class="visually-hidden">Regular price</span>
                                                <s id="ComparePrice-product-template"><span
                                                        class="money">$600.00</span></s>
                                                <span
                                                    class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                    <span id="ProductPrice-product-template"><span
                                                            class="money">$500.00</span></span>
                                                </span>
                                            </p>
                                            <div class="product-single__description rte">
                                                Belle Multipurpose Bootstrap 4 Html Template that will give you and your
                                                customers a smooth shopping experience which can be used for various
                                                kinds of stores such as fashion,...
                                            </div>

                                            <form method="post" action="http://annimexweb.com/cart/add"
                                                id="product_form_10508262282" accept-charset="UTF-8"
                                                class="product-form product-form-product-template hidedropdown"
                                                enctype="multipart/form-data">
                                                <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                                    <div class="product-form__item">
                                                        <label class="header">Color: <span
                                                                class="slVariant">Red</span></label>
                                                        <div data-value="Red"
                                                            class="swatch-element color red available">
                                                            <input class="swatchInput" id="swatch-0-red"
                                                                type="radio" name="option-0" value="Red">
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-red"
                                                                style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);"
                                                                title="Red"></label>
                                                        </div>
                                                        <div data-value="Blue"
                                                            class="swatch-element color blue available">
                                                            <input class="swatchInput" id="swatch-0-blue"
                                                                type="radio" name="option-0" value="Blue">
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-blue"
                                                                style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);"
                                                                title="Blue"></label>
                                                        </div>
                                                        <div data-value="Green"
                                                            class="swatch-element color green available">
                                                            <input class="swatchInput" id="swatch-0-green"
                                                                type="radio" name="option-0" value="Green">
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-green"
                                                                style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);"
                                                                title="Green"></label>
                                                        </div>
                                                        <div data-value="Gray"
                                                            class="swatch-element color gray available">
                                                            <input class="swatchInput" id="swatch-0-gray"
                                                                type="radio" name="option-0" value="Gray">
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-gray"
                                                                style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);"
                                                                title="Gray"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                                    <div class="product-form__item">
                                                        <label class="header">Size: <span
                                                                class="slVariant">XS</span></label>
                                                        <div data-value="XS" class="swatch-element xs available">
                                                            <input class="swatchInput" id="swatch-1-xs"
                                                                type="radio" name="option-1" value="XS">
                                                            <label class="swatchLbl medium rectangle"
                                                                for="swatch-1-xs" title="XS">XS</label>
                                                        </div>
                                                        <div data-value="S" class="swatch-element s available">
                                                            <input class="swatchInput" id="swatch-1-s" type="radio"
                                                                name="option-1" value="S">
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-s"
                                                                title="S">S</label>
                                                        </div>
                                                        <div data-value="M" class="swatch-element m available">
                                                            <input class="swatchInput" id="swatch-1-m" type="radio"
                                                                name="option-1" value="M">
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-m"
                                                                title="M">M</label>
                                                        </div>
                                                        <div data-value="L" class="swatch-element l available">
                                                            <input class="swatchInput" id="swatch-1-l" type="radio"
                                                                name="option-1" value="L">
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-l"
                                                                title="L">L</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Action -->
                                                <div class="product-action clearfix">
                                                    <div class="product-form__item--quantity">
                                                        <div class="wrapQtyBtn">
                                                            <div class="qtyField">
                                                                <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                                        class="fa anm anm-minus-r"
                                                                        aria-hidden="true"></i></a>
                                                                <input type="text" id="Quantity" name="quantity"
                                                                    value="1" class="product-form__input qty">
                                                                <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                        class="fa anm anm-plus-r"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-form__item--submit">
                                                        <button type="button" name="add"
                                                            class="btn product-form__cart-submit">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- End Product Action -->
                                            </form>
                                            <div class="display-table shareRow">
                                                <div class="display-table-cell">
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="#"
                                                            title="Add to Wishlist"><i class="icon anm anm-heart-l"
                                                                aria-hidden="true"></i> <span>Add to
                                                                Wishlist</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End-product-single-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Quick View popup-->

        <!-- Including Jquery -->
        <script src="{{ asset('landing/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('landing/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('landing/assets/js/vendor/jquery.cookie.js') }}"></script>
        <script src="{{ asset('landing/assets/js/vendor/wow.min.js') }}"></script>
        <!-- Including Javascript -->
        <script src="{{ asset('landing/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('landing/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('landing/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('landing/assets/js/lazysizes.js') }}"></script>
        <script src="{{ asset('landing/assets/js/main.js') }}"></script>
    </div>
    </div>
</body>

<!-- belle/shop-fullwidth.html   11 Nov 2019 12:39:06 GMT -->

</html>
