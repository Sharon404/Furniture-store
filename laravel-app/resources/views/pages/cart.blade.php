<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.awaikenthemes.com/livora/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:30:51 GMT -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="AwaikenThemes">
	<!-- Page Title -->
    <title>Livora - Furniture Store eCommerce HTML Template</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('html.awaikenthemes.com/livora/images/favicon.png') }}">
    <!-- Custom Fonts Css-->
	<link href="{{ asset('html.awaikenthemes.com/livora/css/fonts.css') }}" rel="stylesheet" media="screen">
	<!-- Bootstrap Css -->
	<link href="{{ asset('html.awaikenthemes.com/livora/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('html.awaikenthemes.com/livora/css/slicknav.min.css') }}" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{ asset('html.awaikenthemes.com/livora/css/swiper-bundle.min.css') }}">
	<!-- Font Awesome Icon Css-->
	<link href="{{ asset('html.awaikenthemes.com/livora/css/all.min.css') }}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{ asset('html.awaikenthemes.com/livora/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{ asset('html.awaikenthemes.com/livora/css/magnific-popup.css') }}">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{ asset('html.awaikenthemes.com/livora/css/mousecursor.css') }}">
	<!-- Main Custom Css -->
	<link href="{{ asset('html.awaikenthemes.com/livora/css/custom.css') }}" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{ asset('html.awaikenthemes.com/livora/images/loader.svg') }}" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Topbar Content Information Start -->
                    <div class="topbar-content-info">
                        <p>Exclusive Furniture Sale Up To 50% Off</p>
                    </div>
                    <!-- Topbar Content Information End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="header-action-box">
                    <!-- Header Contact Info List Start -->
                    <div class="header-contact-info-list mobile-hide">
                        <!-- Header Contact Info Start -->
                        <div class="header-contact-info">
                            <div class="icon-box">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-phone-primary.svg') }}" alt="">
                            </div>
                            <div class="header-contact-info-content">
                                <p>Need Help ?</p>
                                <span><a href="tel:123456789">+123 456 789</a></span>
                            </div>
                        </div>
                        <!-- Header Contact Info End -->
                    </div>
                    <!-- Header Contact Info List End -->
                    
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('html.awaikenthemes.com/livora/images/logo.svg') }}" alt="Logo">
                    </a>
                    <!-- Logo End -->
                    
                    <!-- Header Action Details Start -->
                    <div class="header-action-details">
                        <ul>
                            <li>
                                <!-- Header Search Form Start -->
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-search.svg') }}" alt="">
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                            <div class="modal-search-form">
                                                <input type="text" name="search" class="form-control" id="search" placeholder="Search Your Product">
                                                <button type="submit" class="modal-search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header Search Form End -->
                            </li>
                            <li><a href="account-wishlist.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-wishlist-primary.svg') }}" alt=""></a></li>
                            <li><a href="account-dashboard.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-user-primary.svg') }}" alt=""></a></li>
                            <li><a href="cart.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-cart-primary.svg') }}" alt=""></a></li>
                        </ul>
                    </div>
                    <!-- Header Action Details End -->
                </div>

                                <!-- Main Menu Start -->
                <div class="main-menu">
                    <button class="mobile-nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Shop</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Main Menu End -->
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
   
    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Cart</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Cart Section Start -->
    <div class="page-cart">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <!-- Cart Content Box Start -->
                    <div class="cart-content-box">
                        <!-- Cart Item Table Box Start -->
                        <div class="cart-item-table-box">
                            <!-- Cart Item Table Start -->
                            <div class="cart-item-table wow fadeInUp">
                                <!-- Cart Item Header Start -->
                                <div class="cart-item-header">
                                    <span class="product-header-tag">Product</span>
                                    <span class="price-header-tag">Price</span>
                                    <span class="quantity-header-tag">Quantity</span>
                                    <span class="subtotal-header-tag">Subtotal</span>
                                </div>
                                <!-- Cart Item Header End -->
    
                                <!-- Cart Item Start -->
                                <div class="cart-item">
                                    <div class="cart-item-image-content">
                                        <div class="cart-item-image">
                                            <figure>
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-1.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="cart-item-info-content">
                                            <div class="cart-item-title">
                                                <p>Modern Linen Fabric Sofa</p>
                                            </div>
                                            <div class="cart-item-price">
                                                <p>@ksh(279)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-total">
                                        <div class="cart-item-quantity">
                                            <div class="qty-box">
                                                <button class="qty-btn minus"><span>-</span></button>
                                                <input type="text" class="qty-input" value="01" readonly="">
                                                <button class="qty-btn plus"><span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="cart-item-subtotal">
                                            <p>@ksh(279)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Item End -->
    
                                <!-- Cart Item Start -->
                                <div class="cart-item">
                                    <div class="cart-item-image-content">
                                        <div class="cart-item-image">
                                            <figure>
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="cart-item-info-content">
                                            <div class="cart-item-title">
                                                <p>Scandinavian Wooden Table</p>
                                            </div>
                                            <div class="cart-item-price">
                                                <p>@ksh(249)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-total">
                                        <div class="cart-item-quantity">
                                            <div class="qty-box">
                                                <button class="qty-btn minus"><span>-</span></button>
                                                <input type="text" class="qty-input" value="01" readonly="">
                                                <button class="qty-btn plus"><span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="cart-item-subtotal">
                                            <p>@ksh(249)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Item End -->
    
                                <!-- Cart Item Start -->
                                <div class="cart-item">
                                    <div class="cart-item-image-content">
                                        <div class="cart-item-image">
                                            <figure>
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-3.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="cart-item-info-content">
                                            <div class="cart-item-title">
                                                <p>Luxury Tufted Velvet Sofa</p>
                                            </div>
                                            <div class="cart-item-price">
                                                <p>@ksh(399)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-total">
                                        <div class="cart-item-quantity">
                                            <div class="qty-box">
                                                <button class="qty-btn minus"><span>-</span></button>
                                                <input type="text" class="qty-input" value="01" readonly="">
                                                <button class="qty-btn plus"><span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="cart-item-subtotal">
                                            <p>@ksh(399)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Item End -->
    
                                <!-- Cart Item Start -->
                                <div class="cart-item">
                                    <div class="cart-item-image-content">
                                        <div class="cart-item-image">
                                            <figure>
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-4.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="cart-item-info-content">
                                            <div class="cart-item-title">
                                                <p>Wooden Dining Chair</p>
                                            </div>
                                            <div class="cart-item-price">
                                                <p>@ksh(899)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-total">
                                        <div class="cart-item-quantity">
                                            <div class="qty-box">
                                                <button class="qty-btn minus"><span>-</span></button>
                                                <input type="text" class="qty-input" value="01" readonly="">
                                                <button class="qty-btn plus"><span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="cart-item-subtotal">
                                            <p>@ksh(899)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Item End -->
                            </div>
                            <!-- Cart Item Table End -->
    
                            <!-- Cart Item Buttons Start -->
                            <div class="cart-item-buttons wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#" class="btn-default btn-update">Update Cart</a>
                                <a href="#" class="btn-default btn-clear">Clear Cart</a>
                            </div>
                            <!-- Cart Item Buttons End -->
                        </div>
                        <!-- Cart Item Table Box End -->

                        <!-- Interested Products Box Start -->
                        <div class="interested-products-box">
                            <!-- Section Title Start -->
                            <div class="section-title wow fadeInUp">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">You May be interested:</h2>    
                            </div>
                            <!-- Section Title End -->

                            <!-- Product item List Start -->
                            <div class="product-item-list">
                                <!-- Product Item Start -->
                                <div class="product-item wow fadeInUp">
                                    <!-- Product Item Header Start -->
                                    <div class="product-item-header">
                                        <!-- Product Item Image Start -->
                                        <div class="product-item-image">
                                            <a href="product-single.html">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-1.jpg') }}" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Product Item Image End -->

                                        <!-- Product Item Action Start -->
                                        <div class="product-item-action">
                                            <ul>
                                                <li><a href="account-wishlist.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-wishlist-primary.svg') }}" alt=""></a></li>
                                                <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-preview.svg') }}" alt=""></a></li>
                                                <li><a href="cart.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-cart-primary.svg') }}" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- Product Item Action End -->
                                    </div>
                                    <!-- Product Item Header End -->                                        

                                    <!-- Product Item Body Start -->
                                    <div class="product-item-body">
                                        <!-- Product Item Content Start -->
                                        <div class="product-item-content">
                                            <h2 class="product-item-title"><a href="product-single.html">Modern Linen Fabric Sofa</a></h2>
                                            <span class="product-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- Product Item Content End -->
                
                                        <!-- Product Item Price Start -->
                                        <div class="product-item-price">
                                            <h3>@ksh(279) <small>@ksh(290)</small> <span>25%</span></h3>
                                        </div>
                                        <!-- Product Item Price End -->
                                    </div>
                                    <!-- Product Item Body End -->
                                </div>
                                <!-- Product Item End -->

                                <!-- Product Item Start -->
                                <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Product Item Header Start -->
                                    <div class="product-item-header">
                                        <!-- Product Item Image Start -->
                                        <div class="product-item-image">
                                            <a href="product-single.html">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-2.jpg') }}" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Product Item Image End -->

                                        <!-- Product Item Action Start -->
                                        <div class="product-item-action">
                                            <ul>
                                                <li><a href="account-wishlist.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-wishlist-primary.svg') }}" alt=""></a></li>
                                                <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-preview.svg') }}" alt=""></a></li>
                                                <li><a href="cart.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-cart-primary.svg') }}" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- Product Item Action End -->
                                    </div>
                                    <!-- Product Item Header End -->                                        

                                    <!-- Product Item Body Start -->
                                    <div class="product-item-body">
                                        <!-- Product Item Content Start -->
                                        <div class="product-item-content">
                                            <h2 class="product-item-title"><a href="product-single.html">Scandinavian Wooden Table</a></h2>
                                            <span class="product-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- Product Item Content End -->
                
                                        <!-- Product Item Price Start -->
                                        <div class="product-item-price">
                                            <h3>@ksh(249) <small>@ksh(290)</small> <span>14%</span></h3>
                                        </div>
                                        <!-- Product Item Price End -->
                                    </div>
                                    <!-- Product Item Body End -->
                                </div>
                                <!-- Product Item End -->

                                <!-- Product Item Start -->
                                <div class="product-item wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- Product Item Header Start -->
                                    <div class="product-item-header">
                                        <!-- Product Item Image Start -->
                                        <div class="product-item-image">
                                            <a href="product-single.html">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-3.jpg') }}" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Product Item Image End -->

                                        <!-- Product Item Action Start -->
                                        <div class="product-item-action">
                                            <ul>
                                                <li><a href="account-wishlist.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-wishlist-primary.svg') }}" alt=""></a></li>
                                                <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-preview.svg') }}" alt=""></a></li>
                                                <li><a href="cart.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-cart-primary.svg') }}" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- Product Item Action End -->
                                    </div>
                                    <!-- Product Item Header End -->                                        

                                    <!-- Product Item Body Start -->
                                    <div class="product-item-body">
                                        <!-- Product Item Content Start -->
                                        <div class="product-item-content">
                                            <h2 class="product-item-title"><a href="product-single.html">Luxury Tufted Velvet Sofa</a></h2>
                                            <span class="product-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- Product Item Content End -->
                
                                        <!-- Product Item Price Start -->
                                        <div class="product-item-price">
                                            <h3>@ksh(399) <small>@ksh(450)</small> <span>11%</span></h3>
                                        </div>
                                        <!-- Product Item Price End -->
                                    </div>
                                    <!-- Product Item Body End -->
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <!-- Product item List End -->
                        </div>
                        <!-- Interested Products Box End -->
                    </div>
                    <!-- Cart Content Box End -->
                </div>
                
                <div class="col-xl-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar right-side-sidebar">
                        <!-- Order Summary Box Start -->
                        <div class="order-summary-box wow fadeInUp" data-wow-delay="0.2s">
                            <form id="promocodeForm" action="#" method="POST">
                                <!-- Order Summary Content Box Start -->
                                <div class="order-summary-content-box">
                                    <div class="order-summary-box-title">
                                        <h2>Order Summary</h2>
                                    </div>
                                    <div class="order-summary-promocode-box">
                                        <div class="order-summary-promocode-form">
                                            <div class="form-group">
                                                <input type="text" name="promo" class="form-control" placeholder="Add promo code" required>
                                                <button type="submit" class="btn-default btn-accent">Apply</button>
                                            </div>
                                        </div>
                                        <div class="order-summary-total">
                                            <h3>Subtotal</h3>
                                            <h3>@ksh(260.00)</h3>
                                        </div>
                                    </div>
                                    <div class="order-summary-shipment-info">
                                        <h3>Shipment 1:</h3>
                                        <ul>
                                            <li>
                                                <span>
                                                    <input type="radio" id="Local_pickup" name="interest" value="Local_pickup">
                                                    <label for="Local_pickup">Local pickup:</label>
                                                </span>
                                                <label for="Local_pickup">@ksh(150.00)</label>
                                            </li>
                                            <li>
                                                <span>
                                                    <input type="radio" id="Free_shipping" name="interest" value="Free_shipping" checked>
                                                    <label for="Free_shipping">Free shipping</label>
                                                </span>
                                                <label for="Local_pickup"></label>
                                            </li>
                                            <li>
                                                <span>
                                                    <input type="radio" id="Flat_rate" name="interest" value="Flat_rate">
                                                    <label for="Flat_rate">Flat rate:</label>
                                                </span>
                                                <label for="Flat_rate">@ksh(200.00)</label>
                                            </li>
                                        </ul>
                                        <p>Shipping to <span>Dhaka</span></p>
                                        <a href="account-addresses.html">Change Address</a>
                                    </div>
                                    <div class="order-summary-total">
                                        <h3>Total</h3>
                                        <h3>@ksh(260.00)</h3>
                                    </div>
                                </div>
                                <!-- Order Summary Content Box End -->

                                <!-- Order Checkout Button Start -->
                                <div class="order-checkout-button">
                                    <a href="{{ route('checkout') }}" class="btn-default btn-accent">Proceed to Checkout</a>
                                </div>
                                <!-- Order Checkout Button End -->
                            </form>
                        </div>
                        <!-- Order Summary Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Cart Section End -->
    
    <!-- Main Footer Start -->
    <footer class="main-footer dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Footer Header Box Start -->
                    <div class="footer-header">
                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End --> 

                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ asset('html.awaikenthemes.com/livora/images/logo-white.svg') }}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Contact Item List Start -->
                        <div class="footer-contact-item-list">
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-phone-primary.svg') }}" alt="">
                                </div>
                                <div class="footer-contact-item-content">
                                    <p>Call 24/7</p>
                                    <h2><a href="tel:123456789">+91 12345 6789</a></h2>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->
                        </div>
                        <!-- Footer Contact Item List End -->
                    </div>
                    <!-- Footer Header Box End -->
                </div>

                <div class="col-xl-4">
                    <!-- Footer Newsletter Box Start -->
                    <div class="footer-newsletter-box">
                        <!-- Footer Newsletter Content Start -->
                        <div class="footer-newsletter-content">
                            <p>Crafted with passion deliver elegant furniture experiences for modern homes and lifestyles.</p>
                        </div>
                        <!-- Footer Newsletter Content End -->

                        <!-- Footer Newsletter Form Start -->
                        <div class="footer-newsletter-form">
                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" id="mail" placeholder="Enter Email Address *" required>
                                    <button type="submit" class="newsletter-btn"><img src="{{ asset('html.awaikenthemes.com/livora/images/arrow-primary.svg') }}" alt=""></button>
                                </div>
                            </form>
                        </div>
                        <!-- Footer Newsletter Form End -->
                    </div>
                    <!-- Footer Newsletter Box End -->
                </div>

                <div class="col-xl-8">
                    <!-- Footer Links Box Start -->
                    <div class="footer-links-box">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="products.html">Shop</a></li>
                                <li><a href="products.html">Collections</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h2>Customer Services</h2>
                            <ul>
                                <li><a href="delivery-policy.html">Shipping Information</a></li>
                                <li><a href="refund-return.html">Return Policy</a></li>
                                <li><a href="cancellation-policy.html">Cancellation Policy</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="term-condition.html">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links footer-contact-list">
                            <h2>Contact Information</h2>
                            <ul>
                                <li>245 Modern Avenue, Manhattan, New York, USA</li>
                                <li><a href="tel:123456789">+91 12345 6789</a></li>
                                <li><a href="mailto:support@domain.com">support@domain.com</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    <!-- Footer Links Box End -->
                </div>
            </div>
        </div>

        <!-- Foooter Copyright Start -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-box">
                            <!-- Footer Copyright Text Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright Â© 2026 All Rights Reserved.</p>
                            </div>
                            <!-- Footer Copyright Text End -->
                            
                            <!-- Footer Payment Options Start -->
                            <div class="footer-payment-options">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-1.svg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-2.svg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-3.svg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-4.svg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-5.svg') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-6.svg') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <!-- Footer Payment Options End -->
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Foooter Copyright Start -->
    </footer>
    <!-- Main Footer End -->

    <!-- Jquery Library File -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('html.awaikenthemes.com/livora/js/counter.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/lenis.min.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/gsap.min.js') }}"></script>
    <script src="{{ asset('html.awaikenthemes.com/livora/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('html.awaikenthemes.com/livora/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('html.awaikenthemes.com/livora/js/function.js') }}"></script>
    <!-- Theme Panel js file -->
    <script src="{{ asset('demo.awaikenthemes.com/assets/js/theme-panel-dynamic.js') }}"></script>
</body>

<!-- Mirrored from html.awaikenthemes.com/livora/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:30:52 GMT -->
</html>

