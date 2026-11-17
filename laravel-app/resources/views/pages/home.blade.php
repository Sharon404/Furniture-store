@extends('layouts.storefront')

@section('title', 'Home | Livora')

@section('content')
    <section class="hero-section dark-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-sub-title wow fadeInUp">Curated for modern living</span>
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Sophisticated furniture for beautiful everyday spaces.</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.1s">From statement sofas to elegant dining pieces, discover the furniture that turns a house into a refined home.</p>
                    <div class="hero-actions wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('products') }}" class="btn-default" data-cursor="-opaque">Shop collection</a>
                        <a href="{{ route('about') }}" class="btn-border" data-cursor="-opaque">Our story</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-box">
                        <img src="{{ asset('images/hero-image.png') }}" alt="Furniture collection">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-space">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <span class="section-sub-title">Why shop with us</span>
                    <h2 class="text-anime-style-3">Built for everyday living</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Handpicked designs</h3>
                        <p>Modern, practical, and stylish furniture curated for your spaces.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Affordable pricing</h3>
                        <p>Transparent Kenyan pricing with quality pieces that fit your budget.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Fast delivery</h3>
                        <p>Quick dispatch and friendly support for homes across Nairobi and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-categories">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Shop by room</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Explore furniture categories</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="category-item-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide category-item">
                                    <div class="category-item-image-box">
                                        <div class="category-item-image">
                                            <figure><img src="{{ asset('images/category-item-image-1.jpg') }}" alt="Living Room"></figure>
                                        </div>
                                        <div class="category-item-info">
                                            <p>Living Room</p>
                                        </div>
                                    </div>
                                    <div class="category-item-content">
                                        <h3><a href="{{ route('products') }}">Living Room</a></h3>
                                    </div>
                                </div>

                                <div class="swiper-slide category-item">
                                    <div class="category-item-image-box">
                                        <div class="category-item-image">
                                            <figure><img src="{{ asset('images/category-item-image-2.jpg') }}" alt="Bedroom"></figure>
                                        </div>
                                        <div class="category-item-info">
                                            <p>Bedroom</p>
                                        </div>
                                    </div>
                                    <div class="category-item-content">
                                        <h3><a href="{{ route('products') }}">Bedroom</a></h3>
                                    </div>
                                </div>

                                <div class="swiper-slide category-item">
                                    <div class="category-item-image-box">
                                        <div class="category-item-image">
                                            <figure><img src="{{ asset('images/category-item-image-3.jpg') }}" alt="Dining"></figure>
                                        </div>
                                        <div class="category-item-info">
                                            <p>Dining</p>
                                        </div>
                                    </div>
                                    <div class="category-item-content">
                                        <h3><a href="{{ route('products') }}">Dining</a></h3>
                                    </div>
                                </div>

                                <div class="swiper-slide category-item">
                                    <div class="category-item-image-box">
                                        <div class="category-item-image">
                                            <figure><img src="{{ asset('images/category-item-image-4.jpg') }}" alt="Office"></figure>
                                        </div>
                                        <div class="category-item-info">
                                            <p>Office</p>
                                        </div>
                                    </div>
                                    <div class="category-item-content">
                                        <h3><a href="{{ route('products') }}">Office</a></h3>
                                    </div>
                                </div>

                                <div class="swiper-slide category-item">
                                    <div class="category-item-image-box">
                                        <div class="category-item-image">
                                            <figure><img src="{{ asset('images/category-item-image-5.jpg') }}" alt="Outdoor"></figure>
                                        </div>
                                        <div class="category-item-info">
                                            <p>Outdoor</p>
                                        </div>
                                    </div>
                                    <div class="category-item-content">
                                        <h3><a href="{{ route('products') }}">Outdoor</a></h3>
                                    </div>
                                </div>

                                <div class="swiper-slide category-item">
                                    <div class="category-item-image-box">
                                        <div class="category-item-image">
                                            <figure><img src="{{ asset('images/category-item-image-6.jpg') }}" alt="Decor"></figure>
                                        </div>
                                        <div class="category-item-info">
                                            <p>Decor</p>
                                        </div>
                                    </div>
                                    <div class="category-item-content">
                                        <h3><a href="{{ route('products') }}">Decor</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-space light-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <span class="section-sub-title">Popular collections</span>
                    <h2 class="text-anime-style-3">Best sellers</h2>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('products') }}" class="btn-default">View all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('product-single') }}" class="product-card" data-cursor-text="View">
                        <img src="{{ asset('images/product-1.jpg') }}" alt="Round oak table">
                        <h3>Round Oak Table</h3>
                        <p>From @ksh(14500)</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('product-single') }}" class="product-card" data-cursor-text="View">
                        <img src="{{ asset('images/product-2.jpg') }}" alt="Tufted cream sofa">
                        <h3>Tufted Cream Sofa</h3>
                        <p>From @ksh(6200)</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('product-single') }}" class="product-card" data-cursor-text="View">
                        <img src="{{ asset('images/product-3.jpg') }}" alt="Classic accent chair">
                        <h3>Classic Accent Chair</h3>
                        <p>From @ksh(8900)</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-video dark-section">
        <div class="intro-video-bg-video">
            <video autoplay muted loop playsinline>
                <source src="https://demo.awaikenthemes.com/assets/videos/livora-our-story-1-video.mp4" type="video/mp4">
            </video>
        </div>

        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-8">
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Crafted for living</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Luxury spaces start with thoughtful design.</h2>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="intro-video-circle wow fadeInUp">
                        <a href="{{ route('products') }}" aria-label="Explore furniture collection">
                            <img src="{{ asset('images/intro-video-circle.svg') }}" alt="Play video">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-trending-products">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Trending inspiration</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Curated looks for refined homes</h2>
                    </div>
                </div>
            </div>

            <div class="trending-product-item-boxes">
                <article class="trending-product-item">
                    <div class="trending-product-item-image">
                        <a href="{{ route('product-single') }}" data-cursor-text="View">
                            <img src="{{ asset('images/trending-product-image-1.jpg') }}" alt="Minimal lounge set">
                        </a>
                    </div>
                    <div class="trending-product-item-content">
                        <h3><a href="{{ route('product-single') }}">Cloud Lounge</a></h3>
                        <p><b>KES 48,000</b></p>
                    </div>
                </article>

                <article class="trending-product-item">
                    <div class="trending-product-item-image">
                        <a href="{{ route('product-single') }}" data-cursor-text="View">
                            <img src="{{ asset('images/trending-product-image-2.jpg') }}" alt="Oak dining table">
                        </a>
                    </div>
                    <div class="trending-product-item-content">
                        <h3><a href="{{ route('product-single') }}">Oak Dining</a></h3>
                        <p><b>KES 62,500</b></p>
                    </div>
                </article>

                <article class="trending-product-item">
                    <div class="trending-product-item-image">
                        <a href="{{ route('product-single') }}" data-cursor-text="View">
                            <img src="{{ asset('images/trending-product-image-3.jpg') }}" alt="Accent cabinet">
                        </a>
                    </div>
                    <div class="trending-product-item-content">
                        <h3><a href="{{ route('product-single') }}">Accent Cabinet</a></h3>
                        <p><b>KES 31,000</b></p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="our-testimonials light-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="testimonials-image wow fadeInUp">
                        <figure>
                            <img src="{{ asset('images/testimonials-image.png') }}" alt="Happy customer">
                        </figure>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="testimonials-content">
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Happy customer</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Beautiful furniture trusted by modern families</h2>
                        </div>

                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“The quality, finish, and comfort exceeded our expectations. Our living room feels more premium and welcoming than ever.”</p>
                                            </div>
                                            <div class="testimonial-item-author-box">
                                                <div class="testimonial-item-author">
                                                    <div class="testimonial-item-author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('images/author-1.jpg') }}" alt="Olivia Bennett">
                                                        </figure>
                                                    </div>
                                                    <div class="testimonial-item-author-content">
                                                        <h2>Olivia Bennett</h2>
                                                        <p>Homeowner</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-item-quotes">
                                                    <img src="{{ asset('images/icon-testimonials-quotes.svg') }}" alt="Quote icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“We wanted pieces that felt both luxurious and practical, and Livora delivered exactly that. The craftsmanship is exceptional.”</p>
                                            </div>
                                            <div class="testimonial-item-author-box">
                                                <div class="testimonial-item-author">
                                                    <div class="testimonial-item-author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('images/author-2.jpg') }}" alt="Dylan Moyo">
                                                        </figure>
                                                    </div>
                                                    <div class="testimonial-item-author-content">
                                                        <h2>Dylan Moyo</h2>
                                                        <p>Interior Client</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-item-quotes">
                                                    <img src="{{ asset('images/icon-testimonials-quotes.svg') }}" alt="Quote icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection

