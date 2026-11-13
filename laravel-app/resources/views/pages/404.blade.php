@extends('layouts.storefront')

@section('title', 'Page Not Found | Livora')

@section('content')
    <section class="section-space">
        <div class="container text-center">
            <div class="summary-box">
                <h1>404</h1>
                <h2>Page not found</h2>
                <p>The page you are looking for does not exist or has moved.</p>
                <a href="{{ route('home') }}" class="btn-default">Go home</a>
            </div>
        </div>
    </section>
@endSection
