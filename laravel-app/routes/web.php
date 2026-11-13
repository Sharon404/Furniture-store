<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/products', 'pages.products')->name('products');
Route::view('/product-single', 'pages.product-single')->name('product-single');
Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/order-received', 'pages.order-received')->name('order.received');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/blog-single', 'pages.blog-single')->name('blog-single');
Route::view('/wishlist', 'pages.wishlist')->name('wishlist');
Route::view('/profile', 'pages.profile')->name('profile');
Route::view('/signup', 'pages.signup')->name('signup');

Route::view('/login', 'pages.login')->name('login');
Route::view('/forgot-password', 'pages.forgot-password')->name('forgot-password');

Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::view('/delivery-policy', 'pages.delivery-policy')->name('delivery-policy');
Route::view('/refund-return', 'pages.refund-return')->name('refund-return');
Route::view('/term-condition', 'pages.term-condition')->name('term-condition');
Route::view('/cancellation-policy', 'pages.cancellation-policy')->name('cancellation-policy');
Route::view('/testimonials', 'pages.testimonials')->name('testimonials');
Route::view('/faqs', 'pages.faqs')->name('faqs');

Route::view('/404', 'pages.404')->name('404');
Route::fallback(fn () => view('pages.404'));
