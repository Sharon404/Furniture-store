<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(Request $request): View
    {
        $status = (string) $request->query('status', 'all');

        $orders = [
            ['id' => 'BTF-9021', 'customer' => 'Mary Wanjiru', 'status' => 'pending', 'payment' => 'Paid', 'delivery' => 'Nairobi CBD', 'amount' => 'KSh 84,500'],
            ['id' => 'BTF-9019', 'customer' => 'James Otieno', 'status' => 'processing', 'payment' => 'Paid', 'delivery' => 'Kisumu', 'amount' => 'KSh 46,000'],
            ['id' => 'BTF-9014', 'customer' => 'Asha Ibrahim', 'status' => 'shipped', 'payment' => 'Paid', 'delivery' => 'Mombasa', 'amount' => 'KSh 122,300'],
            ['id' => 'BTF-9008', 'customer' => 'Grace Mutua', 'status' => 'completed', 'payment' => 'Paid', 'delivery' => 'Nakuru', 'amount' => 'KSh 61,900'],
            ['id' => 'BTF-8997', 'customer' => 'Lydia Naliaka', 'status' => 'cancelled', 'payment' => 'Refunded', 'delivery' => 'Eldoret', 'amount' => 'KSh 24,100'],
        ];

        $filtered = $status === 'all'
            ? $orders
            : array_values(array_filter($orders, fn (array $order): bool => $order['status'] === $status));

        return view('admin.pages.orders.index', [
            'orders' => $filtered,
            'status' => $status,
        ]);
    }

    public function show(string $orderId): View
    {
        return view('admin.pages.orders.show', ['orderId' => strtoupper($orderId)]);
    }
}
