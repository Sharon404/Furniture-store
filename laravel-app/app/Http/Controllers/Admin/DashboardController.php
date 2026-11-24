<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            ['label' => 'Total Sales', 'value' => 'KSh 12.6M', 'trend' => '+8.4%', 'icon' => 'ri-money-dollar-circle-line', 'color' => 'success'],
            ['label' => 'Total Orders', 'value' => '1,284', 'trend' => '+5.1%', 'icon' => 'ri-shopping-bag-3-line', 'color' => 'info'],
            ['label' => 'Total Products', 'value' => '426', 'trend' => '+2.3%', 'icon' => 'ri-stack-line', 'color' => 'primary'],
            ['label' => 'Total Customers', 'value' => '812', 'trend' => '+6.7%', 'icon' => 'ri-user-3-line', 'color' => 'warning'],
            ['label' => 'Pending Orders', 'value' => '37', 'trend' => '-3.2%', 'icon' => 'ri-timer-flash-line', 'color' => 'danger'],
            ['label' => 'Low-Stock Products', 'value' => '18', 'trend' => '+1.8%', 'icon' => 'ri-alarm-warning-line', 'color' => 'danger'],
        ];

        $recentOrders = [
            ['order_no' => 'BTF-9021', 'customer' => 'Mary Wanjiru', 'status' => 'Pending', 'amount' => 'KSh 84,500', 'created_at' => 'Today, 09:41'],
            ['order_no' => 'BTF-9019', 'customer' => 'James Otieno', 'status' => 'Processing', 'amount' => 'KSh 46,000', 'created_at' => 'Today, 08:27'],
            ['order_no' => 'BTF-9014', 'customer' => 'Asha Ibrahim', 'status' => 'Shipped', 'amount' => 'KSh 122,300', 'created_at' => 'Yesterday, 18:15'],
            ['order_no' => 'BTF-9008', 'customer' => 'Grace Mutua', 'status' => 'Completed', 'amount' => 'KSh 61,900', 'created_at' => 'Yesterday, 13:52'],
        ];

        $bestSellers = [
            ['name' => 'Haven Corner Sectional Seat', 'sku' => 'BTF-HCS-001', 'orders' => 73, 'stock' => 12, 'amount' => 'KSh 1,226,400'],
            ['name' => 'Mist Grey Upholstered Bed', 'sku' => 'BTF-MGB-014', 'orders' => 58, 'stock' => 9, 'amount' => 'KSh 1,070,100'],
            ['name' => 'Nordic 6-Seater Dining Set', 'sku' => 'BTF-NDS-007', 'orders' => 49, 'stock' => 7, 'amount' => 'KSh 548,800'],
            ['name' => 'Cozy Nest Baby Crib', 'sku' => 'BTF-CNB-021', 'orders' => 21, 'stock' => 5, 'amount' => 'KSh 469,350'],
        ];

        $monthlySales = [982000, 1052000, 1115000, 1093000, 1240000, 1288000, 1320000, 1395000, 1424000, 1476000, 1515000, 1580000];
        $monthlyOrders = [68, 73, 78, 75, 86, 91, 94, 102, 106, 112, 118, 121];

        return view('admin.pages.dashboard', [
            'stats' => $stats,
            'recentOrders' => $recentOrders,
            'bestSellers' => $bestSellers,
            'monthlySales' => $monthlySales,
            'monthlyOrders' => $monthlyOrders,
        ]);
    }
}
