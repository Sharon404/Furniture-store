<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.awaikenthemes.com/livora/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:31:01 GMT -->
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

    <!-- Page Product Single Start -->
    <div class="page-product-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Product Single Content Start -->
                    <div class="page-product-single-content">
                        <!-- Product Single Breadcrumb List Start -->
                        <div class="product-single-breadcrumb-list wow fadeInUp">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="products.html">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Modern Linen Fabric Sofa</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Product Single Breadcrumb List End -->

                        <!-- Product Single Info Box Start -->
                        <div class="product-single-info-box">
                            <!-- Product Single Image Box Start -->
                            <div class="product-single-image-box wow fadeInUp">
                                <!-- Product Single Image Item Start -->
                                <div class="swiper product-single-image-item">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-thumbnail-image-1.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-thumbnail-image-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-thumbnail-image-3.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Single Image Item End -->

                                <!-- Product Single Image Slider Start -->
                                <div class="swiper product-single-image-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-image-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-thumbnail-image-1.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-thumbnail-image-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-thumbnail-image-3.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Single Image Slider End -->
                            </div>
                            <!-- Product Single Image Box End -->

                            <!-- Product Single Info Content Start -->
                            <div class="product-single-info-content">
                                <!-- Product Single title Start -->
                                <div class="product-single-title wow fadeInUp">
                                    <h1>Modern Linen Fabric Sofa</h1>
                                    <span>Living Room</span>
                                </div>
                                <!-- Product Single title End -->

                                <!-- Product Single Description Start -->
                                <div class="product-single-description wow fadeInUp">
                                    <p>Upgrade your living space with the perfect combination of elegance, comfort, and durability. Designed with premium materials.</p>
                                </div>
                                <!-- Product Single Description End -->

                                <!-- Product Single Price Start -->
                                <div class="product-single-price wow fadeInUp" data-wow-delay="0.2s">
                                    <h2>@ksh(279) <sub>@ksh(290)</sub></h2>
                                    <span>Inclusive of all taxes*</span>
                                </div>
                                <!-- Product Single Price End -->

                                <!-- Product Single Item Color Start -->
                                <div class="product-single-item-color wow fadeInUp" data-wow-delay="0.4s">
                                    <h3>Color: <span>Beige</span></h3>
                                    <div class="product-item-variant-colors">
                                        <input type="radio" name="color" id="black">
                                        <label for="black" class="color-variant black"></label>
                                        
                                        <input type="radio" name="color" id="gray">
                                        <label for="gray" class="color-variant gray"></label>
                                        
                                        <input type="radio" name="color" id="light" checked>
                                        <label for="light" class="color-variant light"></label>
                                        
                                        <input type="radio" name="color" id="accent">
                                        <label for="accent" class="color-variant accent"></label>
                                        
                                        <input type="radio" name="color" id="pink">
                                        <label for="pink" class="color-variant pink"></label>
                                    </div>
                                </div>
                                <!-- Product Single Item Color End -->

                                <!-- Product Single Content Body Start -->
                                <div class="product-single-content-body wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="qty-box">
                                        <button class="qty-btn minus">-</button>
                                        <input type="text" class="qty-input" value="01" readonly>
                                        <button class="qty-btn plus">+</button>
                                    </div>
                                    <div class="product-single-content-btn">
                                        <a href="cart.html" class="btn-default btn-accent">Add To cart</a>
                                    </div>
                                    <div class="product-single-action">
                                        <ul>
                                            <li><a href="account-wishlist.html"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-wishlist-primary.svg') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-compare-primary.svg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Product Single Content Body End -->

                                <!-- Product Single Content Footer Start -->
                                <div class="product-single-content-footer wow fadeInUp" data-wow-delay="0.8s">
                                    <!-- Product Single Details Start -->
                                    <div class="product-single-details-list">
                                        <ul>
                                            <li><span>SKU:</span> AURX-SILVER-201</li>
                                            <li><span>Categories:</span> Linen Sofas</li>
                                        </ul>
                                    </div>
                                    <!-- Product Single Details End -->
                                    
                                    <!-- Product Single Payment Method Start -->
                                    <div class="product-single-payment-method">
                                        <h3>Accepted Payment Methods</h3>
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-1.svg') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-2.svg') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-3.svg') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-4.svg') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-5.svg') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-payment-options-6.svg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <!-- Product Single Payment Method End -->
                                </div>
                                <!-- Product Single Content Footer End -->
                            </div>
                            <!-- Product Single Info Content End -->
                        </div>
                        <!-- Product Single Info Box End -->

                        <!-- Product Single Info Start -->
                        <div class="product-single-review-box wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Product Single Box Start -->
                            <div class="product-single-review-tab tab-content" id="missionvision">
                                <!-- Product Step Nav start -->
                                <div class="product-step-nav">
                                    <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first" type="button" role="tab" aria-controls="first" aria-selected="true">Product Description</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second" type="button" role="tab" aria-controls="second" aria-selected="false">Additional Information</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third" type="button" role="tab" aria-controls="second" aria-selected="false">Reviews (50)</button>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Product Step Nav End -->
                                
                                <!-- Product Tab Item Box Start -->
                                <div class="product-tab-item-box tab-pane fade show active" id="first" role="tabpanel">
                                    <div class="product-tab-item-content">
                                        <p>Crafted with premium materials to deliver exceptional comfort, durability, and timeless modern elegance for everyday living. Designed to enhance your interiors with stylish aesthetics, functional comfort, and long-lasting furniture craftsmanship. Experience luxurious comfort and sophisticated design perfectly created for modern homes and contemporary lifestyles. Premium craftsmanship and refined finishes combine to create furniture that complements every interior beautifully.</p>
                                        <p>Loved by homeowners for its premium comfort, elegant design, and exceptional everyday durability. Customers appreciate the perfect combination of modern style, quality craftsmanship, and lasting comfort. Highly rated for its beautiful finish, comfortable seating, and sophisticated contemporary appearance. Trusted by families for delivering reliable quality, comfort, and timeless furniture aesthetics.</p>
                                        <ul>
                                            <li>Customers love the premium craftsmanship, modern elegance, and comfortable user experience.</li>
                                            <li>Highly recommended for its elegant appearance, strong build quality, and superior comfort.</li>
                                            <li>A customer favorite known for combining practicality, comfort, and modern luxury beautifully.</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Product Tab Item End -->

                                <!-- Product Tab Item Box Start -->
                                <div class="product-tab-item-box tab-pane fade" id="second" role="tabpanel">
                                    <div class="product-additional-content">
                                        <!-- Product Additional Content Title Start -->
                                        <div class="product-additional-content-title">
                                            <h2>Additional Information</h2>
                                        </div>
                                        <!-- Product Additional Content Title End -->

                                        <!-- Product Additional Info Table Start -->
                                        <div class="product-additional-info-table">
                                            <table>
                                                <tr>
                                                    <td><b>Product Name</b></td>
                                                    <td>Modern Linen Fabric Sofa</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Material</b></td>
                                                    <td>Premium Fabric Upholstery</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Color</b></td>
                                                    <td>Cream Beige</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Style</b></td>
                                                    <td>Modern / Contemporary</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!-- Product Additional Info Table End -->
                                    </div>      
                                </div>
                                <!-- Product Tab Item Box End -->

                                <!-- Product Tab Item Box Start -->
                                <div class="product-tab-item-box tab-pane fade" id="third" role="tabpanel">
                                     <div class="product-review-from-content">
                                        <!-- Customer Review List Start -->
                                        <div class="customer-review-list">
                                            <!-- Customer Review Item Start -->
                                            <div class="customer-review-item">
                                                <div class="icon-box">
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/author-1.jpg') }}" alt="">
                                                </div>
                                                <div class="customer-review-item-body">
                                                    <div class="customer-review-item-content">
                                                        <p><span>Author</span> - June 3, 2026</p>
                                                        <p>Soft and comfortable fabric upholstery</p>
                                                    </div>
                                                    <div class="customer-review-item-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Customer Review Item End -->

                                            <!-- Customer Review Item Start -->
                                            <div class="customer-review-item">
                                                <div class="icon-box">
                                                    <img src="{{ asset('html.awaikenthemes.com/livora/images/author-2.jpg') }}" alt="">
                                                </div>
                                                <div class="customer-review-item-body">
                                                    <div class="customer-review-item-content">
                                                        <p><span>Author</span> - June 1, 2026</p>
                                                        <p>Compact size ideal for apartments & small living spaces</p>
                                                    </div>
                                                    <div class="customer-review-item-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Customer Review Item End -->
                                        </div>
                                        <!-- Customer Review List End -->

                                        <!-- Contact Form Start -->
                                        <div class="review-form">
                                            <div class="review-form-content">
                                                <h3>Add a review</h3>
                                                <p>Your email address will not be published. Required fields are marked Your rating</p>
                                            </div>
                                            <form id="reviewForm" action="#" method="POST" data-toggle="validator">
                                                <div class="row">                                
                                                    <div class="form-group col-md-12 mb-4">
                                                        <input type="text" name="review" class="form-control" id="review" placeholder="Your review" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group col-md-6 mb-4">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group col-md-6 mb-4">
                                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Email" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group review-form-note">
                                                        <input type="checkbox" id="review_form_checkbox" name="#">
                                                        <label class="form-label" for="review_form_checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn-default btn-accent">Submit Message</button>
                                                        <div id="msgSubmit" class="h3 d-none"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Contact Form End -->
                                    </div>                           
                                </div>
                                <!-- Product Tab Item Box End -->
                            </div>
                            <!-- Product Single Box End -->
                        </div> 
                        <!-- Product Single Info End -->
                    </div>
                    <!-- Page Product Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Products Single End -->
    
    <!-- Related Product Section Start -->
    <div class="related-products">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Featured products</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Explore Our Signature Jewellery Pieces</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Related Product Items Start -->
                    <div class="related-product-items-list product-item-list">
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
                    <!-- Related Product Items End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Related Product Section End -->

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

<!-- Mirrored from html.awaikenthemes.com/livora/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:31:02 GMT -->
</html>

