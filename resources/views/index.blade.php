<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Selfmade Luxuries</title>
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

<body class="template-index belle template-index-belle">
    <div id="pre-loader">
        <img src="{{ asset('landing/assets/images/loader.gif') }}" alt="Loading..." />
    </div>
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value=""
                        placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
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
                                <li class="lvl1 parent dropdown"><a href="#">Pages <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        @auth
                                            @if (Auth::user()->usertype == 0)
                                                <li><a href="{{ route('cart.view') }}" class="site-nav">Checkout</a></li>
                                            @endif
                                        @else
                                            <li></li>
                                        @endauth

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
        @include('sweetalert::alert')
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="{{ url('/') }}">Home</a>
                </li>
                <li class="lvl1 parent megamenu"><a href="{{ route('shops') }}">Shop</a>
                </li>
                <li class="lvl1 parent megamenu"><a href="">Pages <i class="anm anm-plus-l"></i></a>
                    <ul>
                        @auth
                            @if (Auth::user()->usertype == 0)
                                <li><a href="{{ route('cart.view') }}" class="site-nav">Checkout</a></li>
                            @endif
                        @else
                            <li></li>
                        @endauth
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
            <!--Home slider-->
            <div class="slideshow slideshow-wrapper pb-section sliderFull">
                <div class="home-slideshow">
                    <div class="slide">
                        <div class="blur-up lazyload bg-size">
                            <img class="blur-up lazyload bg-img"
                                data-src="{{ asset('landing/assets/images/banner4.jpg') }}"
                                src="{{ asset('landing/assets/images/banner5.jpg') }}" alt="Shop Our New Collection"
                                title="Shop Our New Collection" />
                            <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                                <div class="slideshow__text-content bottom">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Selfmade Luxuries</h2>
                                        <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or
                                            modern. We have you covered</span>
                                        <a href="{{ route('login') }}">
                                            <span class="btn">Shop now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="blur-up lazyload bg-size">
                            <img class="blur-up lazyload bg-img"
                                data-src="{{ asset('landing/assets/images/banner5.jpg') }}"
                                src="{{ asset('landing/assets/images/banner5.jpg') }}" alt="Summer Bikini Collection"
                                title="Summer Bikini Collection" />
                            <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                                <div class="slideshow__text-content bottom">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Selfmade Luxuries</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend
                                            only</span>
                                        <a href="{{ route('login') }}">
                                            <span class="btn">Shop now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Home slider-->
            <!--Collection Tab slider-->
            <div class="tab-slider-product section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">New Arrivals</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                            <div class="tabs-listing">
                                <ul class="tabs clearfix">
                                    <li class="active" rel="tab1">Women</li>
                                    <li rel="tab2">Men</li>
                                    <li rel="tab3">Sale</li>
                                </ul>
                                <style>
                                    .product-image img {
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                    }
                                </style>
                                <div class="tab_container">

                                    <div id="tab1" class="tab_content grid-products">
                                        <div class="productSlider">
                                            @foreach ($products as $product)
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image" style="width: 100%; height:300px;">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="{{ $product->product_photo }}"
                                                                src="{{ $product->product_photo }}" alt="image"
                                                                title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
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

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="{{ route('cart.add') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <input type="number" name="quantity" value="1"
                                                                min="1" class="form-control"
                                                                style="width: 80px; margin: 10px auto;">
                                                            <button class="btn btn-addto-cart" type="submit">Add To
                                                                Cart</button>
                                                        </form>
                                                    </div>
                                                    <!-- end product image -->
                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a
                                                                href="short-description.html">{{ $product->product_title }}</a>
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
                                                        <!-- End Variant -->
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div id="tab2" class="tab_content grid-products">
                                        <div class="productSlider">
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="short-description.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload"
                                                            data-src="{{ asset('landing/assets/images/product-images/product-image6.jpg') }}"
                                                            src="{{ asset('landing/assets/images/product-images/product-image6.jpg') }}"
                                                            alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload"
                                                            data-src="{{ asset('landing/assets/images/product-images/product-image6-1.jpg') }}"
                                                            src="{{ asset('landing/assets/images/product-images/product-image6-1.jpg') }}"
                                                            alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span
                                                                class="lbl on-sale">-16%</span> <span
                                                                class="lbl pr-label1">new</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->

                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#"
                                                        onclick="window.location.href='cart.html'"method="post">
                                                        <button class="btn btn-addto-cart" type="button"
                                                            tabindex="0">Add To Cart</button>
                                                    </form>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="short-description.html">Zipper Jacket</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$788.00</span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab_content grid-products">
                                        <div class="productSlider">
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="short-description.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload"
                                                            data-src="{{ asset('landing/assets/images/product-images/product-image11.jpg') }}"
                                                            src="{{ asset('landing/assets/images/product-images/product-image11.jpg') }}"
                                                            alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload"
                                                            data-src="{{ asset('landing/assets/images/product-images/product-image11-1.jpg') }}"
                                                            src="{{ asset('landing/assets/images/product-images/product-image11-1.jpg') }}"
                                                            alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->

                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#"
                                                        onclick="window.location.href='cart.html'"method="post">
                                                        <button class="btn btn-addto-cart" type="button"
                                                            tabindex="0">Add To Cart</button>
                                                    </form>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="short-description.html">Azur Bracelet in Blue
                                                            Azurite</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$168.00</span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Collection Tab slider-->

            <!--Collection Box slider-->
            <div class="collection-box section">
                <div class="container-fluid">
                    <div class="collection-grid">
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('landing/assets/images/collection/fashion.jpg') }}"
                                    src="{{ asset('landing/assets/images/collection/fashion.jpg') }}" alt="Fashion"
                                    class="blur-up lazyload" />
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Fashion</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img class="blur-up lazyload"
                                    data-src="{{ asset('landing/assets/images/collection/cosmetic.jpg') }}"
                                    src="{{ asset('landing/assets/images/collection/cosmetic.jpg') }}"
                                    alt="Cosmetic" />
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Cosmetic</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('landing/assets/images/collection/bag.jpg') }}"
                                    src="{{ asset('landing/assets/images/collection/bag.jpg') }}" alt="Bag"
                                    class="blur-up lazyload" />
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Bag</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('landing/assets/images/collection/accessories.jpg') }}"
                                    src="{{ asset('landing/assets/images/collection/accessories.jpg') }}"
                                    alt="Accessories" class="blur-up lazyload" />
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('landing/assets/images/collection/shoes.jpg') }}"
                                    src="{{ asset('landing/assets/images/collection/shoes.jpg') }}" alt="Shoes"
                                    class="blur-up lazyload" />
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Shoes</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('landing/assets/images/collection/jewellry.jpg') }}"
                                    src="{{ asset('landing/assets/images/collection/jewellry.jpg') }}" alt="Jewellry"
                                    class="blur-up lazyload" />
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Jewellry</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Collection Box slider-->

            <!--Logo Slider-->
            <div class="section logo-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="logo-bar">
                                <div class="logo-bar__item">
                                    <img src="{{ asset('landing/assets/images/logo/brandlogo1.png') }}"
                                        alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="{{ asset('landing/assets/images/logo/brandlogo2.png') }}"
                                        alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="{{ asset('landing/assets/images/logo/brandlogo3.png') }}"
                                        alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="{{ asset('landing/assets/images/logo/brandlogo4.png') }}"
                                        alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="{{ asset('landing/assets/images/logo/brandlogo5.png') }}"
                                        alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="{{ asset('landing/assets/images/logo/brandlogo6.png') }}"
                                        alt="" title="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Logo Slider-->

            <!--Featured Product-->
            <div class="product-rows section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">Featured collection</h2>
                                <p>Our most popular products based on sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-products">
                        <style>
                            .grid-view-item__link {
                                width: 100%;
                                height: 400px;
                            }

                            .grid-view-item__link img {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }
                        </style>
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">

                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="{{ $product->product_photo }}"
                                                src="{{ $product->product_photo }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="{{ $product->product_photo2 }}"
                                                src="{{ $product->product_photo2 }}" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span
                                                    class="lbl on-sale">-16%</span>
                                                <span class="lbl pr-label1">new</span>
                                            </div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">{{ $product->product_title }}</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">&#8358;{{ $product->product_oldprice }}</span>
                                                <span class="price">&#8358;{{ $product->product_newprice }}</span>
                                            </div>
                                            <!-- End product price -->

                                            <!-- product button -->

                                            <!-- end product button -->
                                        </div>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--End Featured Product-->

            <!--Latest Blog-->
            <div class="latest-blog section pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">Latest From our Blog</h2>
                            </div>
                        </div>
                    </div>
                    <style>
                        .article__grid-image {
                            width: 300px;
                            height: 200px;
                        }

                        .article__grid-image img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }
                    </style>
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                                <div class="wrap-blog">
                                    <a href="blog-left-sidebar.html" class="article__grid-image">
                                        <img src="{{ $blog->blog_photo }}" alt="It's all about how you wear"
                                            title="It's all about how you wear" class="blur-up lazyloaded" />
                                    </a>
                                    <div class="article__grid-meta article__grid-meta--has-image">
                                        <div class="wrap-blog-inner">
                                            <h2 class="h3 article__title">
                                                <a href="blog-left-sidebar.html">{{ $blog->blog_title }}</a>
                                            </h2>
                                            <span class="article__date">{{ $blog->created_at }}</span>
                                            <div class="rte article__grid-excerpt">
                                                {{ $blog->blog_description }}
                                            </div>
                                            <ul class="list--inline article__meta-buttons">
                                                <li><a href="blog-article.html">Read more</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--End Latest Blog-->

            <!--Store Feature-->
            <div class="store-feature section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="display-table store-info">
                                <li class="display-table-cell">
                                    <i class="icon anm anm-truck-l"></i>
                                    <h5>Free Shipping &amp; Return</h5>
                                    <span class="sub-text">Free shipping on all US orders</span>
                                </li>
                                <li class="display-table-cell">
                                    <i class="icon anm anm-dollar-sign-r"></i>
                                    <h5>Money Guarantee</h5>
                                    <span class="sub-text">30 days money back guarantee</span>
                                </li>
                                <li class="display-table-cell">
                                    <i class="icon anm anm-comments-l"></i>
                                    <h5>Online Support</h5>
                                    <span class="sub-text">We support online 24/7 on day</span>
                                </li>
                                <li class="display-table-cell">
                                    <i class="icon anm anm-credit-card-front-r"></i>
                                    <h5>Secure Payments</h5>
                                    <span class="sub-text">All payment are Secured and trusted.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Store Feature-->
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

        <!-- Newsletter Popup -->
        <div class="newsletter-wrap" id="popup-container">
            <div id="popup-window">
                <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
                <!-- Modal content-->
                <div class="display-table splash-bg">
                    <div class="display-table-cell width40"><img
                            src="{{ asset('landing/assets/images/banner1.jpg') }}" alt="Join Our Mailing List"
                            title="Join Our Mailing List" /> </div>
                    <div class="display-table-cell width60 text-center">
                        <div class="newsletter-left">
                            <h2>Join Our Mailing List</h2>
                            <p>Sign Up for our exclusive email list and be the first to know about new products and
                                special offers</p>
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="email" class="input-group__field newsletter__input" name="EMAIL"
                                        value="" placeholder="Email address" required="">
                                    <span class="input-group__btn">
                                        <button type="submit" class="btn newsletter__submit" name="commit"
                                            id="subscribeBtn"> <span
                                                class="newsletter__submit-text--large">Subscribe</span> </button>
                                    </span>
                                </div>
                            </form>
                            <ul class="list--inline site-footer__social-icons social-icons">
                                <li><a class="social-icons__link" href="#" title="Facebook"><i
                                            class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Twitter"><i
                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Pinterest"><i
                                            class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Instagram"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="YouTube"><i
                                            class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Vimeo"><i
                                            class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Popup -->

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
        <!--For Newsletter Popup-->
        <script>
            jQuery(document).ready(function() {
                jQuery('.closepopup').on('click', function() {
                    jQuery('#popup-container').fadeOut();
                    jQuery('#modalOverly').fadeOut();
                });

                var visits = jQuery.cookie('visits') || 0;
                visits++;
                jQuery.cookie('visits', visits, {
                    expires: 1,
                    path: '/'
                });
                console.debug(jQuery.cookie('visits'));
                if (jQuery.cookie('visits') > 1) {
                    jQuery('#modalOverly').hide();
                    jQuery('#popup-container').hide();
                } else {
                    var pageHeight = jQuery(document).height();
                    jQuery('<div id="modalOverly"></div>').insertBefore('body');
                    jQuery('#modalOverly').css("height", pageHeight);
                    jQuery('#popup-container').show();
                }
                if (jQuery.cookie('noShowWelcome')) {
                    jQuery('#popup-container').hide();
                    jQuery('#active-popup').hide();
                }
            });

            jQuery(document).mouseup(function(e) {
                var container = jQuery('#popup-container');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.fadeOut();
                    jQuery('#modalOverly').fadeIn(200);
                    jQuery('#modalOverly').hide();
                }
            });
        </script>
        <!--End For Newsletter Popup-->
    </div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->

</html>
