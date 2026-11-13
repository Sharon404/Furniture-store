@extends('layouts.storefront')

@section('title', 'Order Received | Livora')

@section('content')
    <section class="section-space">
        <div class="container text-center">
            <div class="summary-box">
                <h1>Thank you for your order</h1>
                <p>Your order has been received and is being processed.</p>
                <a href="{{ route('home') }}" class="btn-default">Back to home</a>
            </div>
        </div>
    </section>
@endSection
