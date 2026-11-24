<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = [
            ['id' => 'C-201', 'name' => 'Mary Wanjiru', 'email' => 'mary@example.com', 'phone' => '+254700100200', 'orders' => 12, 'lifetime' => 'KSh 486,000'],
            ['id' => 'C-202', 'name' => 'James Otieno', 'email' => 'james@example.com', 'phone' => '+254700200300', 'orders' => 8, 'lifetime' => 'KSh 212,500'],
            ['id' => 'C-203', 'name' => 'Asha Ibrahim', 'email' => 'asha@example.com', 'phone' => '+254700300400', 'orders' => 9, 'lifetime' => 'KSh 344,900'],
        ];

        return view('admin.pages.customers.index', compact('customers'));
    }

    public function show(string $customerId): View
    {
        return view('admin.pages.customers.show', ['customerId' => strtoupper($customerId)]);
    }
}
