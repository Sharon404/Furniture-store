@extends('layouts.storefront')

@section('title', 'Contact Us | BEDS - TREND FURNITURE')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-box">
                        <h3>Call us</h3>
                        <p><a href="tel:+254712345678">+254 712 345 678</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box">
                        <h3>Email</h3>
                        <p><a href="mailto:hello@bedstrendfurniture.com">hello@bedstrendfurniture.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box">
                        <h3>Location</h3>
                        <p>Nairobi, Kenya</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8">
                    <form class="checkout-form">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="mb-3">
                            <label>Message</label>
                            <textarea class="form-control" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn-default">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endSection

