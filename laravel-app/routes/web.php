<?php

use Illuminate\Support\Facades\Route;

$productCatalog = [
	'round-oak-table' => [
		'slug' => 'round-oak-table',
		'name' => 'Round Oak Table',
		'image' => 'images/product-1.jpg',
		'alt' => 'Round oak table',
		'price' => '@ksh(16800)',
		'listing_price' => '@ksh(16800)',
		'description' => 'A handcrafted round oak table designed for modern homes. Its compact footprint and natural finish make it perfect for dining nooks, coffee corners, and layered living spaces.',
		'materials' => ['Solid Oak', 'Walnut Veneer', 'Ash Wood'],
		'finishes' => ['Natural Oak', 'Honey Brown', 'Smoked Walnut'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Seats up to 4 people'],
	],
	'tufted-cream-sofa' => [
		'slug' => 'tufted-cream-sofa',
		'name' => 'Tufted Cream Sofa',
		'image' => 'images/product-2.jpg',
		'alt' => 'Tufted cream sofa',
		'price' => '@ksh(18450)',
		'listing_price' => '@ksh(18450)',
		'description' => 'A refined two-seater sofa with plush tufted upholstery, built for comfort and elegant living room styling.',
		'materials' => ['Linen Blend', 'Performance Fabric', 'Velvet'],
		'finishes' => ['Cream', 'Warm Beige', 'Pearl Grey'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Deep comfort cushioning'],
	],
	'classic-accent-chair' => [
		'slug' => 'classic-accent-chair',
		'name' => 'Classic Accent Chair',
		'image' => 'images/product-3.jpg',
		'alt' => 'Classic accent chair',
		'price' => '@ksh(24900)',
		'listing_price' => '@ksh(24900)',
		'description' => 'A statement accent chair with timeless lines and supportive seating, ideal for reading corners and living rooms.',
		'materials' => ['Solid Wood Frame', 'Boucle Fabric', 'Premium Foam'],
		'finishes' => ['Sage', 'Caramel', 'Charcoal'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Ergonomic back support'],
	],
	'walnut-side-table' => [
		'slug' => 'walnut-side-table',
		'name' => 'Walnut Side Table',
		'image' => 'images/product-1.jpg',
		'alt' => 'Walnut side table',
		'price' => '@ksh(11200)',
		'listing_price' => '@ksh(11200)',
		'description' => 'A compact walnut side table that pairs naturally with sofas and accent seating for a warm modern finish.',
		'materials' => ['Walnut Veneer', 'Engineered Wood', 'Powder-Coated Base'],
		'finishes' => ['Walnut', 'Mocha', 'Espresso'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Compact space-saving footprint'],
	],
	'modern-2-seater-sofa' => [
		'slug' => 'modern-2-seater-sofa',
		'name' => 'Modern 2-Seater Sofa',
		'image' => 'images/product-2.jpg',
		'alt' => 'Modern two-seater sofa',
		'price' => '@ksh(18450)',
		'listing_price' => '@ksh(18450)',
		'description' => 'A clean-lined modern sofa made for compact living spaces, balancing comfort, style, and durability.',
		'materials' => ['Linen Blend', 'Soft Velvet', 'High Density Foam'],
		'finishes' => ['Stone', 'Cream', 'Taupe'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Ideal for apartments and lounges'],
	],
	'vintage-lounge-chair' => [
		'slug' => 'vintage-lounge-chair',
		'name' => 'Vintage Lounge Chair',
		'image' => 'images/product-3.jpg',
		'alt' => 'Vintage lounge chair',
		'price' => '@ksh(223500)',
		'listing_price' => '@ksh(223500)',
		'description' => 'A lounge chair inspired by vintage silhouettes with updated upholstery for premium comfort and character.',
		'materials' => ['Hardwood Frame', 'Linen Blend', 'Brass Accent Legs'],
		'finishes' => ['Olive', 'Rust', 'Midnight'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Signature vintage styling'],
	],
];

Route::get('/', function () use ($productCatalog) {
	return view('pages.home', [
		'productCatalog' => $productCatalog,
	]);
})->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/products', function () use ($productCatalog) {
	return view('pages.products', [
		'productCatalog' => $productCatalog,
	]);
})->name('products');
Route::get('/products/{slug}', function (string $slug) use ($productCatalog) {
	$product = $productCatalog[$slug] ?? null;

	abort_unless($product, 404);

	return view('pages.product-single', [
		'product' => $product,
	]);
})->name('product.show');

Route::redirect('/product-single', '/products/round-oak-table')->name('product-single');
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
