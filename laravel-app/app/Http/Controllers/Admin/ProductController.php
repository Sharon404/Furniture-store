<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = [
            ['name' => 'Haven Corner Sectional Seat', 'category' => 'Sofas & Couches', 'stock' => 12, 'price' => 'KSh 16,800', 'status' => 'Published'],
            ['name' => 'Cloud Linen Couch', 'category' => 'Sofas & Couches', 'stock' => 16, 'price' => 'KSh 18,450', 'status' => 'Published'],
            ['name' => 'Mist Grey Upholstered Bed', 'category' => 'Beds', 'stock' => 9, 'price' => 'KSh 18,450', 'status' => 'Published'],
            ['name' => 'Cozy Nest Baby Crib', 'category' => 'Baby Cots & Cribs', 'stock' => 5, 'price' => 'KSh 223,500', 'status' => 'Low Stock'],
        ];

        return view('admin.pages.products.index', compact('products'));
    }

    public function create(): View
    {
        return view('admin.pages.products.create');
    }

    public function edit(string $sku): View
    {
        return view('admin.pages.products.edit', ['sku' => strtoupper($sku)]);
    }

    public function categories(): View
    {
        $categories = [
            ['name' => 'Beds', 'count' => 84],
            ['name' => 'Mattresses', 'count' => 52],
            ['name' => 'Sofas & Couches', 'count' => 96],
            ['name' => 'Dining Sets', 'count' => 38],
            ['name' => 'Chairs', 'count' => 71],
            ['name' => 'Baby Cots & Cribs', 'count' => 21],
            ['name' => 'Accessories', 'count' => 64],
        ];

        return view('admin.pages.products.categories', compact('categories'));
    }

    public function images(): View
    {
        return view('admin.pages.products.images');
    }

    public function variations(): View
    {
        return view('admin.pages.products.variations');
    }

    public function pricing(): View
    {
        return view('admin.pages.products.pricing');
    }

    public function status(): View
    {
        return view('admin.pages.products.status');
    }

    public function stock(): View
    {
        return view('admin.pages.inventory.index');
    }
}
