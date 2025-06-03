<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/blog-fullwidth.html   11 Nov 2019 12:46:09 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Blog | Safemade Luxuries</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('landing/assets/images/logo/SelfmadeLuxuries.jpg')}}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('landing/assets/css/plugins.css')}}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{asset('landing/assets/css/bootstrap.min.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('landing/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('landing/assets/css/responsive.css')}}">
</head>
<body class="template-blog belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
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
            <a href="tel:+2349032409911">
              <p class="phone-no"><i class="anm anm-phone-s"></i> +234 903 240 9911</p>
            </a>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
            <div class="text-center">
              <p class="top-header_middle-text"> Worldwide Express Shipping</p>
            </div>
          </div>
          <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
            <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
            <ul class="customer-links list-inline">
              <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Create Account</a></li>
            </ul>
          </div>
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
                    <a href="{{url('/')}}">
                    	<img src="{{asset('landing/assets/images/logo/mainSelfmadeLuxuries.png')}}" alt="Selfmade Luxuries" title="Selfmade Luxuries" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="{{url('/')}}">Home <i class="anm anm-angle-down-l"></i></a>

                            </li>
                            <li class="lvl1 parent megamenu"><a href="{{route('shops')}}">Shop <i class="anm anm-angle-down-l"></i></a>

                            </li>
                        <li class="lvl1 parent megamenu"><a href="#">Products <i class="anm anm-angle-down-l"></i></a>
                        	<div class="megamenu style2">
                                <ul class="grid mmWrapper">
                                    <li class="grid__item one-whole">
                                        <ul class="grid">
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Product Page</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="product-layout-1.html" class="site-nav lvl-2">Cloths</a></li>
                                                    <li class="lvl-2"><a href="product-layout-2.html" class="site-nav lvl-2">Shoes</a></li>
                                                    <li class="lvl-2"><a href="product-layout-3.html" class="site-nav lvl-2">Jewellery</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                  	<li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="assets/images/megamenu-bg2.jpg" alt=""></a></li>
                                </ul>
                          	</div>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Pages <i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
							<li><a href="{{route('checkout')}}" class="site-nav">Checkout</a></li>
                            <li><a href="{{route('aboutus')}}" class="site-nav">About Us <span class="lbl nm_label1">New</span> </a></li>
                            <li><a href="{{route('contactus')}}" class="site-nav">Contact Us</a></li>
                            <li><a href="{{route('faq')}}" class="site-nav">FAQs</a></li>
                            <li><a href="{{route('comingsoon')}}" class="site-nav">Coming soon <span class="lbl nm_label1">New</span> </a></li>
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="{{route('blog')}}">Blog <i class="anm anm-angle-down-l"></i></a>

                        </li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('landing/assets/images/logo/mainSelfmadeLuxuries.png')}}" alt="Selfmade Luxuries" title="Selfmade Luxuries" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="#;" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                        <div class="variant-cart">Black / XL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                        	<div class="product-price">
                                            	<span class="money">$59.00</span>
                                            </div>
                                         </div>
									</div>
                                </li>
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                        <div class="variant-cart">Gray / XXL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                       	<div class="priceRow">
                                            <div class="product-price">
                                                <span class="money">$99.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!--EndMinicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
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
        	<li class="lvl1 parent megamenu"><a href="{{url('/')}}">Home</a>
        </li>
        	<li class="lvl1 parent megamenu"><a href="{{route('shops')}}">Shop</a>
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
            <li><a href="{{route('checkout')}}" class="site-nav">Checkout</a></li>
            <li><a href="{{route('aboutus')}}" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
            <li><a href="{{route('contactus')}}" class="site-nav">Contact Us</a></li>
            <li><a href="{{route('faq')}}" class="site-nav">FAQs</a></li>
            <li><a href="{{route('comingsoon')}}" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="{{route('blog')}}">Blog</a>
        </li>
      </ul>
	</div>
	<!--End Mobile Menu-->

    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center mb-0">
			<div class="page-title" style="padding: 8rem;">
        		<div class="wrapper"><h1 class="page-width">Blog</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
	    <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Blog</span>
            </div>
        </div>
        <div class="container">
        	<div class="row">
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="custom-search">
                        <form action="http://annimexweb.com/search" method="get" class="input-group search-header search" role="search" style="position: relative;">
                            <input class="search-header__input search__input input-group__field" type="search" name="q" placeholder="Search" aria-label="Search" autocomplete="off">
                            <span class="input-group__btn"><button class="btnSearch" type="submit"> <i class="icon anm anm-search-l"></i> </button></span>
                        </form>
                    </div>
                    <div class="blog--list-view blog--grid-load-more">
                    	<div class="article">
                            <!-- Article Image -->
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-1.jpg" src="assets/images/blog/blog-post-1.jpg" alt="It's all about how you wear"></a>
                            <h2 class="h3"><a href="blog-left-sidebar.html">It's all about how you wear</a></h2>
                            <ul class="publish-detail">
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 0 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte">
                                <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="article">
                            <!-- Article Image -->
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-2.jpg" src="assets/images/blog/blog-post-2.jpg" alt="27 Days of Spring Fashion Recap"></a>
                            <h2 class="h3"><a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a></h2>
                            <ul class="publish-detail">
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 0 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte">
                                <p>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="article">
                            <!-- Article Image -->
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-3.jpg" src="assets/images/blog/blog-post-3.jpg" alt="How to Wear The Folds Trend Four Ways"></a>
                            <h2 class="h3"><a href="#">How to Wear The Folds Trend Four Ways</a></h2>
                            <ul class="publish-detail">
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 10 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="article">
                            <!-- Article Image -->
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-4.jpg" src="assets/images/blog/blog-post-4.jpg" alt="Accusantium doloremque"></a>
                            <h2 class="h3"><a href="#">Accusantium doloremque</a></h2>
                            <ul class="publish-detail">
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 3 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="article">
                            <!-- Article Image -->
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-6.jpg" src="assets/images/blog/blog-post-4.jpg" alt="Accusantium doloremque"></a>
                            <h2 class="h3"><a href="#">Accusantium doloremque</a></h2>
                            <ul class="publish-detail">
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 3 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="loadmore-post">
                            <a href="#;" class="btn loadMorepost">Load More</a>
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
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
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
                            	<li><i class="icon anm anm-map-marker-al"></i><p>Number 45 Prince<br>by Diamond plaza onitsha anambra state</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>+234 903 240 9911</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>support@yousite.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                	<div class="row">
                    	<!--Footer Copyright-->
	                	<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="https://ogcollins.com" target="_blank">Designed by ogcollins</a></div>
                        <!--End Footer Copyright-->
                        <!--Footer Payment Icon-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
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

     <!-- Including Jquery -->
     <script src="{{asset('landing/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('landing/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
     <script src="{{asset('landing/assets/js/vendor/jquery.cookie.js')}}"></script>
     <script src="{{asset('landing/assets/js/vendor/wow.min.js')}}"></script>
     <!-- Including Javascript -->
     <script src="{{asset('landing/assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('landing/assets/js/plugins.js')}}"></script>
     <script src="{{asset('landing/assets/js/popper.min.js')}}"></script>
     <script src="{{asset('landing/assets/js/lazysizes.js')}}"></script>
     <script src="{{asset('landing/assets/js/main.js')}}"></script>
</div>
</body>

<!-- belle/blog-fullwidth.html   11 Nov 2019 12:46:09 GMT -->
</html>
