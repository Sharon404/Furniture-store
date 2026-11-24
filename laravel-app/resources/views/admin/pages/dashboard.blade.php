@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Overview Dashboard')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
    <li class="breadcrumb-item active">Overview</li>
@endsection

@section('content')
<div class="row">
    @foreach($stats as $stat)
        <x-admin.stat-card :label="$stat['label']" :value="$stat['value']" :trend="$stat['trend']" :icon="$stat['icon']" :color="$stat['color']" />
    @endforeach
</div>

<div class="row">
    <div class="col-xxl-8">
        <x-admin.section-card title="Sales Performance" subtitle="Revenue and order trend (preview data)">
            <div id="salesPerformanceChart" style="height: 340px;"></div>
        </x-admin.section-card>
    </div>
    <div class="col-xxl-4">
        <x-admin.section-card title="Revenue Overview" subtitle="Current month breakdown">
            <div class="d-flex justify-content-between mb-2">
                <span class="text-muted">Gross Revenue</span>
                <strong>KSh 1,580,000</strong>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <span class="text-muted">Discounts</span>
                <strong>KSh 92,400</strong>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <span class="text-muted">Delivery Fees</span>
                <strong>KSh 61,300</strong>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span class="fw-medium">Net Revenue</span>
                <strong class="text-success">KSh 1,548,900</strong>
            </div>
        </x-admin.section-card>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <x-admin.section-card title="Recent Orders" subtitle="Latest order intake">
            <div class="table-responsive">
                <table class="table table-nowrap align-middle mb-0">
                    <thead>
                    <tr>
                        <th>Order</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recentOrders as $order)
                        <tr>
                            <td><a href="{{ route('admin.orders.show', strtolower($order['order_no'])) }}" class="fw-semibold">{{ $order['order_no'] }}</a></td>
                            <td>{{ $order['customer'] }}</td>
                            <td><span class="badge bg-light text-dark text-capitalize">{{ $order['status'] }}</span></td>
                            <td>{{ $order['amount'] }}</td>
                            <td>{{ $order['created_at'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </x-admin.section-card>
    </div>

    <div class="col-xl-6">
        <x-admin.section-card title="Best-Selling Products" subtitle="Top movers this month">
            <div class="table-responsive">
                <table class="table table-nowrap align-middle mb-0">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>SKU</th>
                        <th>Orders</th>
                        <th>Stock</th>
                        <th>Revenue</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bestSellers as $product)
                        <tr>
                            <td>{{ $product['name'] }}</td>
                            <td>{{ $product['sku'] }}</td>
                            <td>{{ $product['orders'] }}</td>
                            <td>{{ $product['stock'] }}</td>
                            <td>{{ $product['amount'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </x-admin.section-card>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script>
(function () {
    var root = document.documentElement;
    var isDark = root.getAttribute('data-bs-theme') === 'dark';

    var chartOptions = {
        chart: { type: 'area', height: 340, toolbar: { show: false } },
        series: [
            { name: 'Revenue (KSh)', data: @json($monthlySales) },
            { name: 'Orders', data: @json($monthlyOrders) }
        ],
        stroke: { curve: 'smooth', width: [3, 3] },
        colors: ['#7a5034', '#c1734a'],
        dataLabels: { enabled: false },
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] },
        yaxis: [{ title: { text: 'Revenue' } }, { opposite: true, title: { text: 'Orders' } }],
        grid: { borderColor: isDark ? '#4b3a32' : '#e6d7c4' },
        tooltip: { theme: isDark ? 'dark' : 'light' },
        legend: { position: 'top' }
    };

    var chartElement = document.querySelector('#salesPerformanceChart');
    if (chartElement) {
        var chart = new ApexCharts(chartElement, chartOptions);
        chart.render();
    }
})();
</script>
@endpush
