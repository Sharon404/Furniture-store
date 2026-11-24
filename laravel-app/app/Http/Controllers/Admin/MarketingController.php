<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class MarketingController extends Controller
{
    public function discounts(): View
    {
        return view('admin.pages.discounts.index');
    }

    public function reviews(): View
    {
        return view('admin.pages.reviews.index');
    }
}
