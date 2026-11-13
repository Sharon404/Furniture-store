<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.awaikenthemes.com/livora/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:31:02 GMT -->
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
   
    <!-- Hero Section Start -->
    <div class="hero dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Hero Content Box Start -->
                    <div class="hero-content-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Modern Living Starts Here</span>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Crafted Furniture For Every Beautiful Home</h1>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Hero Content Button Start -->
                        <div class="hero-content-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="products.html" class="btn-default btn-highlighted">Shop Now</a>
                        </div>
                        <!-- Hero Content Button End -->
                    </div>
                    <!-- Hero Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    
    <!-- Our Categories Section Start -->
    <div class="our-categories">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title">Shop By Category</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Explore Furniture Categories</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Category Item Slider Start -->
                    <div class="category-item-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Category Item Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Category Item Strat -->
                                    <div class="category-item">
                                        <div class="category-item-image-box">
                                            <div class="category-item-image">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/category-item-image-1.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="category-item-info">
                                                <p>18 Items</p>
                                            </div>
                                        </div>
                                        <div class="category-item-content">
                                            <h3><a href="products.html">Living Room</a></h3>
                                        </div>
                                    </div>
                                    <!-- Category Item End -->
                                </div>
                                <!-- Category Item Slide End -->
                                
                                <!-- Category Item Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Category Item Strat -->
                                    <div class="category-item">
                                        <div class="category-item-image-box">
                                            <div class="category-item-image">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/category-item-image-2.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="category-item-info">
                                                <p>18 Items</p>
                                            </div>
                                        </div>
                                        <div class="category-item-content">
                                            <h3><a href="products.html">Bedroom</a></h3>
                                        </div>
                                    </div>
                                    <!-- Category Item End -->
                                </div>
                                <!-- Category Item Slide End -->
                                
                                <!-- Category Item Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Category Item Strat -->
                                    <div class="category-item">
                                        <div class="category-item-image-box">
                                            <div class="category-item-image">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/category-item-image-3.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="category-item-info">
                                                <p>18 Items</p>
                                            </div>
                                        </div>
                                        <div class="category-item-content">
                                            <h3><a href="products.html">Dining Room</a></h3>
                                        </div>
                                    </div>
                                    <!-- Category Item End -->
                                </div>
                                <!-- Category Item Slide End -->
                                
                                <!-- Category Item Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Category Item Strat -->
                                    <div class="category-item">
                                        <div class="category-item-image-box">
                                            <div class="category-item-image">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/category-item-image-4.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="category-item-info">
                                                <p>18 Items</p>
                                            </div>
                                        </div>
                                        <div class="category-item-content">
                                            <h3><a href="products.html">Office</a></h3>
                                        </div>
                                    </div>
                                    <!-- Category Item End -->
                                </div>
                                <!-- Category Item Slide End -->
                                
                                <!-- Category Item Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Category Item Strat -->
                                    <div class="category-item">
                                        <div class="category-item-image-box">
                                            <div class="category-item-image">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/category-item-image-5.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="category-item-info">
                                                <p>18 Items</p>
                                            </div>
                                        </div>
                                        <div class="category-item-content">
                                            <h3><a href="products.html">Outdoor</a></h3>
                                        </div>
                                    </div>
                                    <!-- Category Item End -->
                                </div>
                                <!-- Category Item Slide End -->
                                
                                <!-- Category Item Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Category Item Strat -->
                                    <div class="category-item">
                                        <div class="category-item-image-box">
                                            <div class="category-item-image">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/category-item-image-6.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="category-item-info">
                                                <p>18 Items</p>
                                            </div>
                                        </div>
                                        <div class="category-item-content">
                                            <h3><a href="products.html">Home Storage</a></h3>
                                        </div>
                                    </div>
                                    <!-- Category Item End -->
                                </div>
                                <!-- Category Item Slide End -->
                                
                                <!-- Category Item Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Category Item Strat -->
                                    <div class="category-item">
                                        <div class="category-item-image-box">
                                            <div class="category-item-image">
                                                <figure>
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/category-item-image-7.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="category-item-info">
                                                <p>18 Items</p>
                                            </div>
                                        </div>
                                        <div class="category-item-content">
                                            <h3><a href="products.html">Kitchen</a></h3>
                                        </div>
                                    </div>
                                    <!-- Category Item End -->
                                </div>
                                <!-- Category Item Slide End -->
                            </div>
                            <div class="category-pagination"></div>
                        </div>
                    </div>
                    <!-- Category Item Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Categories Section End -->

    <!-- Our Offers Section Start -->
    <div class="our-offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Offer Item List Start -->
                    <div class="offer-item-list">
                        <!-- Offer Item Start -->
                        <div class="offer-item wow fadeInUp">
                            <div class="offer-item-image">
                                <figure>
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/offer-item-image-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="offer-item-content-box">
                                <div class="offer-item-content">
                                    <p>Save Up To 50%</p>
                                    <h3>Limited Time Flash Sale</h3>
                                </div>
                                <div class="offer-item-readmore-btn">
                                    <a href="products.html" class="readmore-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Offer Item End -->

                        <!-- Offer Item Start -->
                        <div class="offer-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="offer-item-image">
                                <figure>
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/offer-item-image-2.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="offer-item-content-box">
                                <div class="offer-item-content">
                                    <p>Extra 20% Off</p>
                                    <h3>Mega Furniture Sale Event</h3>
                                </div>
                                <div class="offer-item-readmore-btn">
                                    <a href="products.html" class="readmore-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Offer Item End -->
                    </div>
                    <!-- Offer Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Offers Section End -->

    <!-- Our Products Section Start -->
    <div class="our-products">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Top Rated Product</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Discover Our Newest Arrivals</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p>Find beautifully crafted furniture designed to transform ordinary spaces into warm, elegant, and inviting living experience.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Product Item List Start -->
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

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Product Item Header Start -->
                            <div class="product-item-header">
                                <!-- Product Item Image Start -->
                                <div class="product-item-image">
                                    <a href="product-single.html">
                                        <figure>
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-4.jpg') }}" alt="">
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
                                    <h2 class="product-item-title"><a href="product-single.html">Wooden Dining Chair</a></h2>
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
                                    <h3>@ksh(899) <small>@ksh(999)</small> <span>10%</span></h3>
                                </div>
                                <!-- Product Item Price End -->
                            </div>
                            <!-- Product Item Body End -->
                        </div>
                        <!-- Product Item End -->
                    </div>
                    <!-- Product Item List Start -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
		            <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
			            <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/author-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-phone-white.svg') }}" alt="">
                            </div>
                        </div>
			            <!-- Satisfy Client Images End -->    
			            <p>Let's make something great work together. <a href="products.html">View our all products.</a></p>
		            </div>
		            <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Products Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video dark-section">
        <!-- Video Start -->
        <div class="intro-video-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop id="introvideo"><source src="{{ asset('html.awaikenthemes.com/livora/images/intro-bg-video.mp4') }}" type="video/mp4"></video> -->
            <video autoplay muted playsinline loop id="introvideo"><source src="https://demo.awaikenthemes.com/assets/videos/livora-intro-video.mp4"></video>
            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="youtubevideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.intro-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Product Video</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Watch Products Designed For Modern Living</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6 col-md-3">
                    <!-- Intro Video Circle Start -->
                    <div class="intro-video-circle">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                            <img src="{{ asset('html.awaikenthemes.com/livora/images/intro-video-circle.svg') }}" alt="">
                        </a>
                    </div>
                    <!-- Intro Video Circle End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Trending Products Section Start -->
    <div class="our-trending-products">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Trending Now</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Trending Space Inspirations</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Trending Product Item Boxes Start -->
                    <div class="trending-product-item-boxes">
                        <!-- Trending Product Item Start -->
                        <div class="trending-product-item wow fadeInUp">
                            <div class="trending-product-item-image">
                                <a href="products.html" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/trending-product-image-1.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="trending-product-item-content">
                                <h3><a href="products.html">OFFICE</a></h3>
                                <p>Designed For Productive <b>Living</b></p>
                            </div>
                        </div>
                        <!-- Trending Product Item End -->
                        
                        <!-- Trending Product Item Start -->
                        <div class="trending-product-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="trending-product-item-image">
                                <a href="products.html" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/trending-product-image-2.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="trending-product-item-content">
                                <h3><a href="products.html">CHAIRS</a></h3>
                                <p>Comfort Meets Timeless <b>Style</b></p>
                            </div>
                        </div>
                        <!-- Trending Product Item End -->
                        
                        <!-- Trending Product Item Start -->
                        <div class="trending-product-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="trending-product-item-image">
                                <a href="products.html" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/trending-product-image-3.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="trending-product-item-content">
                                <h3><a href="products.html">SOFAS</a></h3>
                                <p>Create Moments Of <b>Togetherness</b></p>
                            </div>
                        </div>
                        <!-- Trending Product Item End -->
                        
                        <!-- Product Offer Item Start -->
                        <div class="product-offer-item box-1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="product-offer-item-content">
                                <div class="product-offer-item-header-content">
                                    <span>UP TO 50% OFF</span>
                                    <h3><a href="products.html">Luxury Sofa</a></h3>
                                    <p>Elegant Modern Comfort</p>
                                </div>
                                <div class="product-offer-item-body-content">
                                    <p>Starting from</p>
                                    <h3>@ksh(899)</h3>
                                </div>
                            </div>
                            <div class="product-offer-item-image">
                                <figure>
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/product-offer-image-1.png') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Product Offer Item End -->
                        
                        <!-- Product Offer Item Start -->
                        <div class="product-offer-item box-2 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="product-offer-item-content">
                                <div class="product-offer-item-header-content">
                                    <span>UP TO 40% OFF</span>
                                    <h3><a href="products.html">Modern Desk</a></h3>
                                    <p>Smart Workspaces</p>
                                </div>
                                <div class="product-offer-item-body-content">
                                    <p>Starting from</p>
                                    <h3>@ksh(399)</h3>
                                </div>
                            </div>
                            <div class="product-offer-item-image">
                                <figure>
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/product-offer-image-2.png') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Product Offer Item End -->
                        
                        <!-- Product Offer Item Start -->
                        <div class="product-offer-item box-3 wow fadeInUp" data-wow-delay="1s">
                            <div class="product-offer-item-content">
                                <div class="product-offer-item-header-content">
                                    <span>UP TO 35% OFF</span>
                                    <h3><a href="products.html">Dining Set</a></h3>
                                    <p>Elegant Dining</p>
                                </div>
                                <div class="product-offer-item-body-content">
                                    <p>Starting from</p>
                                    <h3>@ksh(649)</h3>
                                </div>
                            </div>
                            <div class="product-offer-item-image">
                                <figure>
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/product-offer-image-3.png') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Product Offer Item End -->
                    </div>
                    <!-- Trending Product Item Boxes End -->
                </div>
            </div>
        </div>
    </div> 
    <!-- Our Trending Products Section End -->

    <!-- Our Arrivals Section Start -->
    <div class="our-arrivals light-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">New Arrivals</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Newly Arrived Furniture</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p>Explore newly launched furniture collections crafted to bring modern elegance, premium comfort, and timeless style into your home.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <!-- Arrivals Item Box Start -->
                    <div class="our-arrivals-item-box">
                        <!-- Arrivals Item Start -->
                        <div class="arrivals-item highlighted-item dark-section">
                            <!-- Arrivals Item Image Start -->
                            <div class="arrivals-item-image">
                                <a href="#" data-cursor-text="View">
                                    <figure>
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/arrivals-item-image-1.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Arrivals Item Image End -->

                            <!-- Arrivals Item Content Start -->
                            <div class="arrivals-item-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <span class="section-sub-title wow fadeInUp">Up to 40% Off</span>
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Style Meets Comfort</h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Upgrade home with modern furniture design for elegance & everyday living at exclusive discount prices.</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Arrivals Item Button Start -->
                                <div class="arrivals-item-btn wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="products.html" class="btn-default btn-highlighted">Shop Now</a>
                                </div>
                                <!-- Arrivals Item Button End -->
                            </div>
                            <!-- Arrivals Item Content End -->
                        </div>
                        <!-- Arrivals Item End -->

                        <!-- Arrivals Item List Start -->
                        <div class="arrivals-item-list">
                            <!-- Arrivals Item Start -->
                            <div class="arrivals-item">
                                <!-- Arrivals Item Image Start -->
                                <div class="arrivals-item-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure>
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/arrivals-item-image-2.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Arrivals Item Image End -->

                                <!-- Arrivals Item Content Start -->
                                <div class="arrivals-item-content">
                                    <h3><a href="#">Marble Side Table</a></h3>
                                </div>
                                <!-- Arrivals Item Content End -->
                            </div>
                            <!-- Arrivals Item End -->

                            <!-- Arrivals Item Start -->
                            <div class="arrivals-item">
                                <!-- Arrivals Item Image Start -->
                                <div class="arrivals-item-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure>
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/arrivals-item-image-3.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Arrivals Item Image End -->

                                <!-- Arrivals Item Content Start -->
                                <div class="arrivals-item-content">
                                    <h3><a href="#">Minimal Study Desk</a></h3>
                                </div>
                                <!-- Arrivals Item Content End -->
                            </div>
                            <!-- Arrivals Item End -->

                            <!-- Arrivals Item Start -->
                            <div class="arrivals-item">
                                <!-- Arrivals Item Image Start -->
                                <div class="arrivals-item-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure>
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/arrivals-item-image-4.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Arrivals Item Image End -->

                                <!-- Arrivals Item Content Start -->
                                <div class="arrivals-item-content">
                                    <h3><a href="#">Living Room Sofa</a></h3>
                                </div>
                                <!-- Arrivals Item Content End -->
                            </div>
                            <!-- Arrivals Item End -->

                            <!-- Arrivals Item Start -->
                            <div class="arrivals-item">
                                <!-- Arrivals Item Image Start -->
                                <div class="arrivals-item-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure>
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/arrivals-item-image-5.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Arrivals Item Image End -->

                                <!-- Arrivals Item Content Start -->
                                <div class="arrivals-item-content">
                                    <h3><a href="#">Wooden TV Console</a></h3>
                                </div>
                                <!-- Arrivals Item Content End -->
                            </div>
                            <!-- Arrivals Item End -->
                        </div>
                        <!-- Arrivals Item List End -->
                    </div>
                    <!-- Arrivals Item Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Arrivals Section End -->

    <!-- Our Best Selleter Section Start -->
    <div class="our-best-seller">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Best Seller</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Best Selling Furniture Collection</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <!-- Best Seller Box Start -->
                    <div class="best-seller-box">
                        <!-- Best Seller Item Start -->
                        <div class="best-seller-item highlighted-item wow fadeInUp">
                            <div class="best-seller-item-image">
                                <a href="#" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/best-seller-img-1.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="best-seller-item-body">
                                <div class="best-seller-item-content">
                                    <h3><a href="#">Upholstered Storage Beds | 1500+ Designs</a></h3>
                                    <p>Starting from <span>@ksh(899)</span></p>
                                </div>
                                <div class="best-seller-item-btn">
                                    <a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/arrow-white.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- Best Seller Item End -->

                        <!-- Best Seller Item List Start -->
                        <div class="best-seller-item-list">
                            <!-- Best Seller Item Start -->
                            <div class="best-seller-item wow fadeInUp">
                                <div class="best-seller-item-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/best-seller-img-2.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="best-seller-item-body">
                                    <div class="best-seller-item-content">
                                        <h3><a href="#">Cabinets | 800+ Items</a></h3>
                                        <p>Starting from <span>@ksh(199)</span></p>
                                    </div>
                                    <div class="best-seller-item-btn">
                                        <a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Best Seller Item End -->

                            <!-- Best Seller Item Start -->
                            <div class="best-seller-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="best-seller-item-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/best-seller-img-3.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="best-seller-item-body">
                                    <div class="best-seller-item-content">
                                        <h3><a href="#">Dining Sets | 750+ Designs</a></h3>
                                        <p>Starting from <span>@ksh(1299)</span></p>
                                    </div>
                                    <div class="best-seller-item-btn">
                                        <a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Best Seller Item End -->

                            <!-- Best Seller Item Start -->
                            <div class="best-seller-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="best-seller-item-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/best-seller-img-4.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="best-seller-item-body">
                                    <div class="best-seller-item-content">
                                        <h3><a href="%24.html">Sofa Sets | 1200+ Styles</a></h3>
                                        <p>Starting from <span>@ksh(1299)</span></p>
                                    </div>
                                    <div class="best-seller-item-btn">
                                        <a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Best Seller Item End -->

                            <!-- Best Seller Item Start -->
                            <div class="best-seller-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="best-seller-item-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/best-seller-img-5.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="best-seller-item-body">
                                    <div class="best-seller-item-content">
                                        <h3><a href="#">Coffee Tables | 550+ Items</a></h3>
                                        <p>Starting from <span>@ksh(189)</span></p>
                                    </div>
                                    <div class="best-seller-item-btn">
                                        <a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Best Seller Item End -->
                        </div>
                        <!-- Best Seller Item List End -->

                        <!-- Luxury Seller Item Start -->
                        <div class="luxury-seller-item">
                            <!-- Luxury Seller Item Content Start -->
                            <div class="luxury-seller-item-content">
                                <!-- Luxury Seller Item Header Start -->
                                <div class="luxury-seller-item-header">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-3" data-cursor="-opaque">Luxury TV Cabinets Crafted With Elegance</h2>
                                    </div>
                                    <!-- Section Title End -->

                                    <!-- Luxury Seller Body Start -->
                                    <div class="luxury-seller-amenities wow fadeInUp">
                                        <!-- Luxury Seller Body Item Start -->
                                        <div class="luxury-seller-amenities-item">
                                            <div class="icon-box">
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-luxury-seller-amenities-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="luxury-seller-amenities-item-content">
                                                <h3>Modern Minimal Design</h3>
                                            </div>
                                        </div>
                                        <!-- Luxury Seller Body Item End -->

                                        <!-- Luxury Seller Body Item Start -->
                                        <div class="luxury-seller-amenities-item">
                                            <div class="icon-box">
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-luxury-seller-amenities-item-2.svg') }}" alt="">
                                            </div>
                                            <div class="luxury-seller-amenities-item-content">
                                                <h3>Smart Storage Spaces</h3>
                                            </div>
                                        </div>
                                        <!-- Luxury Seller Body Item End -->
                                    </div>
                                    <!-- Luxury Seller Body End -->
                                </div>
                                <!-- Luxury Seller Item Header End -->

                                <!-- Luxury Seller Item List Start -->
                                <div class="luxury-seller-item-list wow fadeInUp" data-wow-delay="0.2s">
                                    <ul>
                                        <li>Premium Wood </li>
                                        <li>Easy To Maintain</li>
                                        <li>Durable Build Quality</li>
                                    </ul>
                                </div>
                                <!-- Luxury Seller Item List End -->
                            </div>
                            <!-- Luxury Seller Item Content End -->
                            
                            <!-- Luxury Seller Item Image Start -->
                            <div class="luxury-seller-item-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/luxury-seller-item-image.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Luxury Seller Item Image End -->
                        </div>
                        <!-- Luxury Seller Item End -->
                    </div>
                    <!-- Best Seller Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Best Selleter Section End -->

    <!-- Our Flat Discount Section Start -->
    <div class="our-flat-discount dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Flat Discount Content Start -->
                    <div class="flat-discount-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Flat Discount</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Discover Amazing Flat Furniture Discounts Today</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Shop premium furniture collections at exclusive flat discounts and transform your home with stylish, comfortable, and modern designs.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Flat Discount Body Start -->
                        <div class="flat-discount-body">
                            <div class="countdown" data-date="2027-05-18 23:59:59">
                                <div class="counter-box"><span id="days">00</span> <p>Days</p></div>
                                <div class="counter-box"><span id="hours">00</span> <p>Hours</p></div>
                                <div class="counter-box"><span id="minutes">00</span> <p>Minutes</p></div>
                                <div class="counter-box"><span id="seconds">00</span> <p>Seconds</p></div>
                            </div>
                        </div>
                        <!-- Flat Discount Body End -->

                        <!-- Flat Discount  Button Start -->
                        <div class="flat-discount-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="products.html" class="btn-default btn-highlighted">Buy Now</a>
                        </div>
                        <!-- Flat Discount Button End -->
                    </div>
                    <!-- Flat Discount Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Flat Discount Image Start -->
                    <div class="flat-discount-image wow fadeInUp">
                        <figure>
                            <img src="{{ asset('html.awaikenthemes.com/livora/images/discount-image.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Flat Discount Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Flat Discount Section End -->

    <!-- Our Stories Section Start -->
    <div class="our-stories">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Design Stories</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Modern Living Inspirations</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <!-- Story Item List Start -->
                    <div class="stoty-item-list">
                        <!-- Story Item Start -->
                        <div class="story-item">
                            <!-- Story Item Video Start -->
                            <div class="story-item-video">
                                <a href="https://demo.awaikenthemes.com/assets/videos/livora-our-story-1-video.mp4" class="popup-video" data-cursor-text="View">
                                    <!-- Selfhosted Video Start -->
                                    <!-- <video autoplay muted loop id="storyvideo1"><source src="{{ asset('html.awaikenthemes.com/livora/images/livora-our-story-1-video.mp4') }}" type="video/mp4"></video> -->
                                    <video autoplay muted playsinline loop id="storyvideo1"><source src="https://demo.awaikenthemes.com/assets/videos/livora-our-story-1-video.mp4" type="video/mp4"></video>
                                    <!-- Selfhosted Video End -->
        
                                    <!-- Youtube Video Start -->
                                    <!-- <div id="youtubevideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.intro-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                                    <!-- Youtube Video End -->
                                </a>
                            </div>
                            <!-- Story Item Video End -->

                            <div class="icon-box">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Story Item End -->

                        <!-- Story Item Start -->
                        <div class="story-item">
                            <!-- Story Item Video Start -->
                            <div class="story-item-video">
                                <a href="https://demo.awaikenthemes.com/assets/videos/livora-our-story-2-video.mp4" class="popup-video" data-cursor-text="View">
                                    <!-- Selfhosted Video Start -->
                                    <!-- <video autoplay muted loop id="storyvideo2"><source src="{{ asset('html.awaikenthemes.com/livora/images/livora-our-story-2-video.mp4') }}" type="video/mp4"></video> -->
                                    <video autoplay muted playsinline loop id="storyvideo2"><source src="https://demo.awaikenthemes.com/assets/videos/livora-our-story-2-video.mp4" type="video/mp4"></video>
                                    <!-- Selfhosted Video End -->
        
                                    <!-- Youtube Video Start -->
                                    <!-- <div id="youtubevideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.intro-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                                    <!-- Youtube Video End -->
                                </a>
                            </div>
                            <!-- Story Item Video End -->

                            <div class="icon-box">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <!-- Story Item End -->

                        <!-- Story Item Start -->
                        <div class="story-item">
                            <!-- Story Item Video Start -->
                            <div class="story-item-video">
                                <a href="https://demo.awaikenthemes.com/assets/videos/livora-our-story-3-video.mp4" class="popup-video" data-cursor-text="View">
                                    <!-- Selfhosted Video Start -->
                                    <!-- <video autoplay muted loop id="storyvideo3"><source src="{{ asset('html.awaikenthemes.com/livora/images/livora-our-story-3-video.mp4') }}" type="video/mp4"></video> -->
                                    <video autoplay muted playsinline loop id="storyvideo3"><source src="https://demo.awaikenthemes.com/assets/videos/livora-our-story-3-video.mp4" type="video/mp4"></video>
                                    <!-- Selfhosted Video End -->
        
                                    <!-- Youtube Video Start -->
                                    <!-- <div id="youtubevideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.intro-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                                    <!-- Youtube Video End -->
                                </a>
                            </div>
                            <!-- Story Item Video End -->

                            <div class="icon-box">
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <!-- Story Item End -->

                        <!-- Story Item Start -->
                        <div class="story-item">
                            <!-- Story Item Video Start -->
                            <div class="story-item-video">
                                <a href="https://demo.awaikenthemes.com/assets/videos/livora-our-story-4-video.mp4" class="popup-video" data-cursor-text="View">
                                    <!-- Selfhosted Video Start -->
                                    <!-- <video autoplay muted loop id="storyvideo4"><source src="{{ asset('html.awaikenthemes.com/livora/images/livora-our-story-4-video.mp4') }}" type="video/mp4"></video> -->
                                    <video autoplay muted playsinline loop id="storyvideo4"><source src="https://demo.awaikenthemes.com/assets/videos/livora-our-story-4-video.mp4" type="video/mp4"></video>
                                    <!-- Selfhosted Video End -->
        
                                    <!-- Youtube Video Start -->
                                    <!-- <div id="youtubevideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.intro-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                                    <!-- Youtube Video End -->
                                </a>
                            </div>
                            <!-- Story Item Video End -->

                            <div class="icon-box">
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            </div>
                        </div>
                        <!-- Story Item End -->
                    </div>
                    <!-- Story Item List End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
		            <div class="section-footer-text wow fadeInUp" data-wow-delay="0.2s">
			            <p><span>Free</span>Let's make something great work together. <a href="contact.html">Get Free Quote.</a></p>
		            </div>
		            <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Stories Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials light-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Testimonials Image Start -->
                    <div class="testimonials-image wow fadeInUp">
                        <figure>
                            <img src="{{ asset('html.awaikenthemes.com/livora/images/testimonials-image.png') }}" alt="">
                        </figure>
                    </div>
                    <!-- Testimonials Image End -->
                </div>

                <div class="col-xl-6">
                    <!-- Testimonials Content Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Happy Customer</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Beautiful Furniture Trusted By Modern Families</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slider Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>â€œPremium craftsmanship, timeless designs, and outstanding customer service made this one of the best furniture purchases we've ever made for our home interiors.â€</p>
                                            </div>
                                            <div class="testimonial-item-author-box">
                                                <div class="testimonial-item-author">
                                                    <div class="testimonial-item-author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/author-1.jpg') }}" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="testimonial-item-author-content">
                                                        <h2>Olivia Bennett</h2>
                                                        <p>Homeowner</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-item-quotes">
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-testimonials-quotes.svg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Testimonial Slider End -->
                                    
                                    <!-- Testimonial Slider Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>â€œPremium craftsmanship, timeless designs, and outstanding customer service made this one of the best furniture purchases we've ever made for our home interiors.â€</p>
                                            </div>
                                            <div class="testimonial-item-author-box">
                                                <div class="testimonial-item-author">
                                                    <div class="testimonial-item-author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('html.awaikenthemes.com/livora/images/author-1.jpg') }}" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="testimonial-item-author-content">
                                                        <h2>Olivia Bennett</h2>
                                                        <p>Homeowner</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-item-quotes">
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-testimonials-quotes.svg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Testimonial Slider End -->
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                    <!-- Testimonials Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Latest News</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Creative Furniture Styling Tips</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <!-- Post Item Start -->
                    <div class="post-item highlighted-post wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/post-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-meta">
                                <ul>
                                    <li><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-calendar-date.svg') }}" alt="">February 24, 2026</li>
                                    <li><a href="#">Living Room</a></li>
                                </ul>
                            </div>
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">How Therapy Helps What to Expect in Your First Session</a></h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-6 col-lg-7">
                    <!-- Posts Item List Start -->
                    <div class="posts-item-list">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="post-featured-image">
                                <a href="blog-single.html" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/post-2.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="post-item-body">
                                <div class="post-item-meta">
                                    <ul>
                                        <li><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-calendar-date.svg') }}" alt="">February 14, 2026</li>
                                        <li><a href="#">Sofa</a></li>
                                    </ul>
                                </div>
                                <div class="post-item-content">
                                    <h2><a href="blog-single.html">Improving Communication in Your Relationship</a></h2>
                                </div>
                                <div class="post-item-btn">
                                    <a href="blog-single.html" class="readmore-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->

                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="post-featured-image">
                                <a href="blog-single.html" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/post-3.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="post-item-body">
                                <div class="post-item-meta">
                                    <ul>
                                        <li><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-calendar-date.svg') }}" alt="">January 18, 2026</li>
                                        <li><a href="#">Bedroom</a></li>
                                    </ul>
                                </div>
                                <div class="post-item-content">
                                    <h2><a href="blog-single.html">Protecting Your Mental Health in a Connected World</a></h2>
                                </div>
                                <div class="post-item-btn">
                                    <a href="blog-single.html" class="readmore-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                    <!-- Posts Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

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

<!-- Mirrored from html.awaikenthemes.com/livora/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:31:02 GMT -->
</html>

