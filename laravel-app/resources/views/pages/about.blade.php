@extends('layouts.storefront')

@section('title', 'About Us | BEDS - TREND FURNITURE')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>About Us</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="section-sub-title">Our story</span>
                    <h2 class="text-anime-style-3">Where comfort meets timeless design</h2>
                    <p>BEDS - TREND FURNITURE creates furniture that balances modern style with everyday comfort. We design for busy homes, inspiring workspaces, and lasting value.</p>
                    <p>From lounges to dining spaces, we help customers shape rooms they genuinely enjoy living in.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/about-image.jpg') }}" alt="About BEDS - TREND FURNITURE" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <section class="section-space light-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <span class="section-sub-title">Our values</span>
                    <h2 class="text-anime-style-3">Built for real life</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Vision</h3>
                        <p>To create stylish, comfortable furniture that improves everyday living.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Mission</h3>
                        <p>To offer well-made pieces that combine quality, value, and lasting design.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Promise</h3>
                        <p>Thoughtful service, durable craftsmanship, and a home experience customers trust.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection

