<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.awaikenthemes.com/livora/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:30:58 GMT -->
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Testimonials</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Testimonials Start  -->
    <div class="page-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                    <div class="testimonial-item wow fadeInUp">
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

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="0.2s">
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
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/author-2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="testimonial-item-author-content">
                                    <h2>Emma Wilson</h2>
                                    <p>Store Manager</p>
                                </div>
                            </div>
                            <div class="testimonial-item-quotes">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-testimonials-quotes.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="0.4s">
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
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/author-3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="testimonial-item-author-content">
                                    <h2>Charlotte Taylor</h2>
                                    <p>Sales Executive</p>
                                </div>
                            </div>
                            <div class="testimonial-item-quotes">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-testimonials-quotes.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="0.6s">
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
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/author-4.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="testimonial-item-author-content">
                                    <h2>Amelia Johnson</h2>
                                    <p>Showroom Coordinator</p>
                                </div>
                            </div>
                            <div class="testimonial-item-quotes">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-testimonials-quotes.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="0.8s">
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
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/author-5.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="testimonial-item-author-content">
                                    <h2>Grace Thompson</h2>
                                    <p>Product Stylist</p>
                                </div>
                            </div>
                            <div class="testimonial-item-quotes">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-testimonials-quotes.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="1s">
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
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/author-6.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="testimonial-item-author-content">
                                    <h2>Isabella Martin</h2>
                                    <p>Operations Manager</p>
                                </div>
                            </div>
                            <div class="testimonial-item-quotes">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-testimonials-quotes.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Testimonials End  -->

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

    <!-- Our Approach Section Start -->
    <div class="our-approach light-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Approach Title Box Start -->
                    <div class="approach-title-box">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <span class="section-sub-title wow fadeInUp">Our Approach</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Thoughtfully Designed For Modern Living</h2>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Approach Title List Start -->
                        <div class="approach-title-list wow fadeInUp" data-wow-delay="0.2s">
                            <ul>
                                <li>Design With Purpose</li>
                                <li>Premium Material</li>
                                <li>Expert Craftsmanship</li>
                            </ul>
                        </div>
                        <!-- Approach Title List End -->
                    </div>
                    <!-- Approach Title Box End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Approach Item List Start -->
                    <div class="approach-item-list">
                        <!-- Approach Item Start -->
                        <div class="approach-item wow fadeInUp">
                            <div class="approach-item-image-box">
                                <div class="approach-item-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/approach-item-image-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="approach-item-tag">
                                    <a href="#">UP TO 40% OFF</a>
                                </div>
                            </div>
                            <div class="approach-item-content">
                                <h3>Design With Purpose</h3>
                                <p>Only high-quality materials are chosen to ensure durability long-lasting performance.</p>
                            </div>
                        </div>
                        <!-- Approach Item End -->
                        
                        <!-- Approach Item Start -->
                        <div class="approach-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="approach-item-image-box">
                                <div class="approach-item-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/approach-item-image-2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="approach-item-tag">
                                    <a href="#">UP TO 40% OFF</a>
                                </div>
                            </div>
                            <div class="approach-item-content">
                                <h3>Premium Material Selection</h3>
                                <p>Only high-quality materials are chosen to ensure durability long-lasting performance.</p>
                            </div>
                        </div>
                        <!-- Approach Item End -->
                        
                        <!-- Approach Item Start -->
                        <div class="approach-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="approach-item-image-box">
                                <div class="approach-item-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('html.awaikenthemes.com/livora/images/approach-item-image-3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="approach-item-tag">
                                    <a href="#">UP TO 40% OFF</a>
                                </div>
                            </div>
                            <div class="approach-item-content">
                                <h3>Expert Craftsmanship</h3>
                                <p>Only high-quality materials are chosen to ensure durability long-lasting performance.</p>
                            </div>
                        </div>
                        <!-- Approach Item End -->
                    </div>
                    <!-- Approach Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- FAQ Content Box Start -->
                    <div class="faq-content-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Frequently Asked Questions</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Common Questions About Furniture Collections</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Find quick answers to the most common questions about our furniture collections, including materials, sizes, customization, delivery.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- FAQ Content Button Start -->
                        <div class="faq-content-button wow fadeInUp" data-wow-delay="0.4s">
                            <a href="faqs.html" class="btn-default">View all FAQ's</a>
                        </div>
                        <!-- FAQ Content Button End -->
                    </div>
                    <!-- FAQ Content Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    1. What types of furniture does Livora offer?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Livora offers a wide range of furniture including sofas, beds, dining tables, chairs, storage solutions, office furniture, and home dÃ©cor accessories.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. Do you provide custom furniture options?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Livora offers a wide range of furniture including sofas, beds, dining tables, chairs, storage solutions, office furniture, and home dÃ©cor accessories.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. What materials are used in Livora furniture?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Livora offers a wide range of furniture including sofas, beds, dining tables, chairs, storage solutions, office furniture, and home dÃ©cor accessories.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. Do you offer home delivery services?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Livora offers a wide range of furniture including sofas, beds, dining tables, chairs, storage solutions, office furniture, and home dÃ©cor accessories.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                        
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    5. How do I maintain my furniture?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" role="region" aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Livora offers a wide range of furniture including sofas, beds, dining tables, chairs, storage solutions, office furniture, and home dÃ©cor accessories.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->                    
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->
    
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

<!-- Mirrored from html.awaikenthemes.com/livora/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:30:59 GMT -->
</html>

