@extends('admin.layouts.app')

@section('title', 'Discounts and Coupons')
@section('page-title', 'Discounts and Coupons')

@section('content')
<x-admin.section-card title="Active Promotions" subtitle="Campaigns prepared for real coupon and rules engine integration">
    <div class="row g-3">
        <div class="col-lg-6"><div class="border rounded p-3"><h6>COZY10</h6><p class="mb-1 text-muted">10% off sofas and couches.</p><span class="badge bg-success-subtle text-success">Active</span></div></div>
        <div class="col-lg-6"><div class="border rounded p-3"><h6>BEDBUNDLE</h6><p class="mb-1 text-muted">KSh 3,500 off bed + mattress.</p><span class="badge bg-info-subtle text-info">Scheduled</span></div></div>
    </div>
</x-admin.section-card>
@endsection
