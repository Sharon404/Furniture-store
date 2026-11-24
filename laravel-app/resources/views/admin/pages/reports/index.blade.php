@extends('admin.layouts.app')

@section('title', 'Reports and Analytics')
@section('page-title', 'Reports and Analytics')

@section('content')
<div class="row">
    <div class="col-xl-7">
        <x-admin.section-card title="Revenue and Order Trends" subtitle="Sample chart data for analytics wiring">
            <div id="reportTrendChart" style="height: 320px;"></div>
        </x-admin.section-card>
    </div>
    <div class="col-xl-5">
        <x-admin.section-card title="Top Categories" subtitle="Current period performance">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 d-flex justify-content-between"><span>Sofas & Couches</span><strong>KSh 3.7M</strong></li>
                <li class="list-group-item px-0 d-flex justify-content-between"><span>Beds</span><strong>KSh 2.9M</strong></li>
                <li class="list-group-item px-0 d-flex justify-content-between"><span>Dining Sets</span><strong>KSh 1.8M</strong></li>
                <li class="list-group-item px-0 d-flex justify-content-between"><span>Baby Cots & Cribs</span><strong>KSh 1.1M</strong></li>
            </ul>
        </x-admin.section-card>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script>
(function () {
    var isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';
    var options = {
        chart: { type: 'bar', height: 320, toolbar: { show: false } },
        series: [
            { name: 'Revenue', data: [980, 1040, 1110, 1210, 1300, 1420] },
            { name: 'Orders', data: [62, 71, 76, 88, 94, 101] }
        ],
        xaxis: { categories: ['Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'] },
        colors: ['#7a5034', '#c1734a'],
        dataLabels: { enabled: false },
        grid: { borderColor: isDark ? '#4b3a32' : '#e6d7c4' },
        tooltip: { theme: isDark ? 'dark' : 'light' }
    };

    var target = document.querySelector('#reportTrendChart');
    if (target) {
        new ApexCharts(target, options).render();
    }
})();
</script>
@endpush
