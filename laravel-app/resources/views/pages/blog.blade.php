@extends('layouts.storefront')

@section('title', 'Blog | Livora')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Latest Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <article class="post-card">
                        <img src="{{ asset('images/blog-image-1.jpg') }}" alt="Blog post">
                        <h3><a href="{{ route('blog-single') }}">Top furniture trends for 2026</a></h3>
                        <p>Explore current colours, textures, and creative layouts that update your home.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="post-card">
                        <img src="{{ asset('images/blog-image-2.jpg') }}" alt="Blog post">
                        <h3><a href="{{ route('blog-single') }}">How to style a compact apartment</a></h3>
                        <p>Smart furniture choices can make smaller spaces feel larger and brighter.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="post-card">
                        <img src="{{ asset('images/blog-image-3.jpg') }}" alt="Blog post">
                        <h3><a href="{{ route('blog-single') }}">Choosing quality pieces that last</a></h3>
                        <p>Learn how to balance aesthetics, comfort, and durability when buying furniture.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endSection
