<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MarketingController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;

$productCatalog = [
	'round-oak-table' => [
		'slug' => 'round-oak-table',
		'name' => 'Haven Corner Sectional Seat',
		'image' => 'images/corner-seat.jpeg',
		'alt' => 'Corner sectional seat',
		'price' => '@ksh(16800)',
		'listing_price' => '@ksh(16800)',
		'short_description' => 'Spacious L-shaped corner seat designed for relaxed family lounging and clean modern styling.',
		'description' => 'This generously sized corner sectional anchors your living room with deep cushions, supportive backrests, and a contemporary silhouette built for everyday comfort and hosting.',
		'materials' => ['Hardwood Internal Frame', 'High-Resilience Foam', 'Performance Upholstery'],
		'finishes' => ['Soft Ash', 'Warm Taupe', 'Charcoal Stone'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Seats the whole family comfortably'],
	],
	'tufted-cream-sofa' => [
		'slug' => 'tufted-cream-sofa',
		'name' => 'Cloud Linen Couch',
		'image' => 'images/linen-couch.jpeg',
		'alt' => 'Linen couch',
		'price' => '@ksh(18450)',
		'listing_price' => '@ksh(18450)',
		'short_description' => 'Soft linen couch with plush seating and a light, airy look for modern interiors.',
		'description' => 'Crafted for bright living rooms, this linen couch offers deep-seat comfort, elegant proportions, and breathable upholstery that keeps your space feeling fresh and inviting.',
		'materials' => ['Premium Linen Blend', 'Kiln-Dried Wood Frame', 'High-Density Foam'],
		'finishes' => ['Natural Linen', 'Sand Beige', 'Misty Grey'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Deep comfort multi-layer cushioning'],
	],
	'classic-accent-chair' => [
		'slug' => 'classic-accent-chair',
		'name' => 'Heritage Recliner Couch',
		'image' => 'images/recliner-couch.jpeg',
		'alt' => 'Recliner couch',
		'price' => '@ksh(24900)',
		'listing_price' => '@ksh(24900)',
		'short_description' => 'Premium recliner couch with ergonomic support and sink-in comfort for long evenings.',
		'description' => 'Designed for full-body relaxation, this recliner couch blends supportive cushioning, ergonomic angles, and durable upholstery to deliver lounge-level comfort daily.',
		'materials' => ['Reinforced Recliner Mechanism', 'Dense Comfort Foam', 'Premium Upholstery'],
		'finishes' => ['Graphite', 'Chocolate', 'Warm Greige'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Smooth reclining action'],
	],
	'walnut-side-table' => [
		'slug' => 'walnut-side-table',
		'name' => 'Nordic 6-Seater Dining Set',
		'image' => 'images/dining-set.jpeg',
		'alt' => 'Dining set',
		'price' => '@ksh(11200)',
		'listing_price' => '@ksh(11200)',
		'short_description' => 'Complete dining set with balanced proportions and timeless wood-led elegance.',
		'description' => 'Perfect for family meals and hosting, this dining set combines a sturdy table and coordinated seating in a warm, contemporary finish built for daily use.',
		'materials' => ['Solid Wood Surfaces', 'Reinforced Joinery', 'Easy-Clean Finish'],
		'finishes' => ['Natural Oak', 'Walnut Brown', 'Espresso'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Ideal for family dining spaces'],
	],
	'modern-2-seater-sofa' => [
		'slug' => 'modern-2-seater-sofa',
		'name' => 'Mist Grey Upholstered Bed',
		'image' => 'images/grey-bed.jpeg',
		'alt' => 'Grey upholstered bed',
		'price' => '@ksh(18450)',
		'listing_price' => '@ksh(18450)',
		'short_description' => 'Elegant grey bed frame with a soft upholstered headboard and clean modern profile.',
		'description' => 'Built for restful bedrooms, this upholstered bed pairs a padded statement headboard with a sturdy frame to create a calm, hotel-inspired sleeping environment.',
		'materials' => ['Engineered Hardwood Base', 'Padded Upholstered Headboard', 'Durable Slat Support'],
		'finishes' => ['Fog Grey', 'Stone Grey', 'Charcoal Grey'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Designed for quiet night comfort'],
	],
	'vintage-lounge-chair' => [
		'slug' => 'vintage-lounge-chair',
		'name' => 'Cozy Nest Baby Crib',
		'image' => 'images/crib.jpeg',
		'alt' => 'Baby crib',
		'price' => '@ksh(223500)',
		'listing_price' => '@ksh(223500)',
		'short_description' => 'Safe, stylish nursery crib crafted for comfort and peace of mind.',
		'description' => 'This nursery crib is designed to blend safety, durability, and gentle styling, giving your little one a secure sleep space while complementing modern family homes.',
		'materials' => ['Solid Timber Rails', 'Non-Toxic Child-Safe Finish', 'Ventilated Slat Design'],
		'finishes' => ['Soft White', 'Natural Wood', 'Warm Ivory'],
		'meta' => ['Free delivery in Nairobi', '2-year craftsmanship warranty', 'Child-safe smooth-edge design'],
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

Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
	Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

	Route::middleware(['auth', 'admin.access'])->group(function () {
		Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

		Route::redirect('/', '/admin/dashboard');
		Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

		Route::prefix('products')->name('products.')->group(function () {
			Route::get('/', [ProductController::class, 'index'])->name('index');
			Route::get('/create', [ProductController::class, 'create'])->name('create');
			Route::get('/edit/{sku}', [ProductController::class, 'edit'])->name('edit');
			Route::get('/categories', [ProductController::class, 'categories'])->name('categories');
			Route::get('/images', [ProductController::class, 'images'])->name('images');
			Route::get('/variations', [ProductController::class, 'variations'])->name('variations');
			Route::get('/pricing', [ProductController::class, 'pricing'])->name('pricing');
			Route::get('/status', [ProductController::class, 'status'])->name('status');
		});

		Route::prefix('orders')->name('orders.')->group(function () {
			Route::get('/', [OrderController::class, 'index'])->name('index');
			Route::get('/{orderId}', [OrderController::class, 'show'])->name('show');
		});

		Route::prefix('customers')->name('customers.')->group(function () {
			Route::get('/', [CustomerController::class, 'index'])->name('index');
			Route::get('/{customerId}', [CustomerController::class, 'show'])->name('show');
		});

		Route::prefix('inventory')->name('inventory.')->group(function () {
			Route::get('/', [ProductController::class, 'stock'])->name('index');
		});

		Route::prefix('discounts')->name('discounts.')->group(function () {
			Route::get('/', [MarketingController::class, 'discounts'])->name('index');
		});

		Route::prefix('reviews')->name('reviews.')->group(function () {
			Route::get('/', [MarketingController::class, 'reviews'])->name('index');
		});

		Route::prefix('reports')->name('reports.')->group(function () {
			Route::get('/', [ReportController::class, 'index'])->name('index');
		});

		Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
		Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
	});
});

Route::fallback(fn () => view('pages.404'));
