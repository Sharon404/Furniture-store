<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.awaikenthemes.com/livora/term-condition.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:31:02 GMT -->
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Term & Condition</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Term & Condition</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Terms Condition Start -->
    <div class="page-terms-conditions">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category List Start -->
                        <div class="page-category-list privacy-policy-sidebar-list wow fadeInUp">
                            <ul>
                                <li><a href="#term_1">1. General</a></li>
                                <li><a href="#term_2">2. Products & Services</a></li>
                                <li><a href="#term_3">3. Pricing & Payments</a></li>
                                <li><a href="#term_4">4. Orders & Cancellation</a></li>
                                <li><a href="#term_5">5. Shipping & Delivery</a></li>
                                <li><a href="#term_6">6. Returns & Refunds</a></li>
                                <li><a href="#term_7">7. Warranty</a></li>
                                <li><a href="#term_8">8. User Responsibilities</a></li>
                                <li><a href="#term_9">9. Intellectual Property</a></li>
                                <li><a href="#term_10">10. Limitation of Liability</a></li>
                                <li><a href="#term_11">11. Intellectual Property</a></li>
                                <li><a href="#term_12">12. Changes to Terms</a></li>
                                <li><a href="#term_13">13. Governing Law</a></li>
                                <li><a href="#term_14">14. Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- Page Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="sidebar-cta-title">Need some help or want to chat</h2>
                            <ul>
                                <li><a href="tel:+001234567"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-phone-primary.svg') }}" alt="">+00 (123) 4567</a></li>
                                <li><a href="mailto:info@example.com"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-mail-primary.svg') }}" alt="">info@example.com</a></li>
                            </ul>
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar Start -->
                </div>     
                
                <div class="col-lg-8">
                    <!-- Privacy Policy Entry Start -->
                    <div class="privacy-policy-entry">
                        <!-- Privacy Policy Entry Header Start -->
                        <div class="privacy-policy-entry-header">
                            <h3>Effective Date: 9rd June, 2026</h3>
                            <p>Welcome to <a href="index-2.html">Livora</a> Your privacy is important to us, and we are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you visit our website.</p>
                        </div>
                        <!-- Privacy Policy Entry Header End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_1">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">1. General</h2>
                                <p class="wow fadeInUp">These Terms & Conditions govern your use of our website and services. By accessing our site, you agree to these terms. If you do not agree, please do not use our website.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_2">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">2. Products & services</h2>
                                <p class="wow fadeInUp">We specialize in offering a wide range of watches including men's, women's, kids', couple, and smartwatches.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp" data-wow-delay="0.2s">
                                <ul>
                                    <li>All product descriptions and images are for reference purposes.</li>
                                    <li>Communicate with you regarding purchases</li>
                                    <li>We strive to display accurate colors and details, but slight variations may occur.</li>
                                    <li>Product availability is subject to change without notice.</li>
                                </ul>
                            </div>   
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_3">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">3. Pricing & payments</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp">
                                <ul>
                                    <li>All prices listed are in [Currency].</li>
                                    <li>We reserve the right to change prices at any time without prior notice.</li>
                                    <li>Payments are processed securely through trusted payment gateways.</li>
                                    <li>Orders will only be confirmed after successful payment.</li>
                                </ul>
                            </div>   
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_4">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">4. Orders & cancellation</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp">
                                <ul>
                                    <li>Once an order is placed, it cannot be modified after processing.</li>
                                    <li>We reserve the right to cancel orders due to pricing errors, stock issues, or suspected fraud.</li>
                                    <li>Payments are processed securely through trusted payment gateways.</li>
                                    <li>Customers may request cancellation before the order is shipped.</li>
                                </ul>
                            </div>
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_5">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">5. Shipping & delivery</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp">
                                <ul>
                                    <li>Delivery timelines are estimates and may vary based on location.</li>
                                    <li>We are not responsible for delays caused by courier services or unforeseen circumstances.</li>
                                    <li>Customers must provide accurate shipping details.</li>
                                </ul>
                            </div>
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_6">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">6. Returns & refunds</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp">
                                <ul>
                                    <li>Returns are accepted within [X] days of delivery (as per our Return Policy).</li>
                                    <li>Products must be unused and in original packaging.</li>
                                    <li>Refunds will be processed after inspection of returned items.</li>
                                </ul>
                            </div>
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_7">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">7. Warranty</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp">
                                <ul>
                                    <li>Certain products may come with manufacturer warranty.</li>
                                    <li>Warranty terms vary depending on the product and brand.</li>
                                    <li>Warranty does not cover physical damage or misuse.</li>
                                </ul>
                            </div>
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_8">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">8. User responsibilities</h2>
                                <p class="wow fadeInUp">By using our website, you agree:</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp" data-wow-delay="0.2s">
                                <ul>
                                    <li>Not to misuse or attempt unauthorized access</li>
                                    <li>Not to engage in fraudulent activities</li>
                                    <li>To provide accurate and complete information</li>
                                </ul>
                            </div>
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_9">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">9. Intellectual property</h2>
                                <p class="wow fadeInUp">All content on this website including images, logos, and text is the property of Livora and protected by copyright laws. Unauthorized use is strictly prohibited.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_10">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">10. Limitation of liability</h2>
                                <p class="wow fadeInUp">We are not liable for:</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp" data-wow-delay="0.2s">
                                <ul>
                                    <li>Any indirect or incidental damages</li>
                                    <li>Loss of data or profits</li>
                                    <li>Issues arising from misuse of products</li>
                                </ul>
                            </div>
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_11">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">11. Third-party links</h2>
                                <p class="wow fadeInUp">Our website may include links to third-party websites. We are not responsible for their content or policies.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_12">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">12. Changes to terms</h2>
                                <p class="wow fadeInUp">We reserve the right to update these Terms & Conditions at any time. Changes will be posted on this page.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_13">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">13. Governing law</h2>
                                <p class="wow fadeInUp">These Terms shall be governed by the laws of [Your Country/State].</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->

                        <!-- Privacy Policy Entry Item Start -->
                        <div class="privacy-policy-entry-item" id="term_14">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">14. Contact us</h2>
                                <p class="wow fadeInUp">If you have any questions regarding these Terms & Conditions, please contact us:</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Privacy Policy Entry Item Content Box Start -->
                            <div class="privacy-policy-entry-item-content-box wow fadeInUp" data-wow-delay="0.2s">
                                <ul class="contact-list-box">
                                    <li><b>Phone:</b> <a href="tel:+123456789"> (+123) 456 789</a></li>
                                    <li><b>E-mail:</b> <a href="mailto:info@example.com"> info@example.com</a></li>
                                    <li><b>Address:</b> 123 Lorem Street, Ipsum Nagar, Dolor City, 360001</li>
                                </ul>
                                <p>By using our website, you agree to these Terms & Conditions.</p>
                            </div>
                            <!-- Privacy Policy Entry Item Content Box End -->
                        </div>
                        <!-- Privacy Policy Entry Item End -->
                    </div>
                    <!-- Privacy Policy Entry End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Terms Condition End -->
    
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

<!-- Mirrored from html.awaikenthemes.com/livora/term-condition.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2026 11:31:02 GMT -->
</html>

