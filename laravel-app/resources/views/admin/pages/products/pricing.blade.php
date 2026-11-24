@extends('admin.layouts.app')

@section('title', 'Pricing and Discounts')
@section('page-title', 'Pricing and Discounts')

@section('content')
<x-admin.section-card title="Pricing Rules" subtitle="Discount ladders, campaign pricing, and margin checks">
    <div class="row g-3">
        <div class="col-md-6">
            <div class="p-3 border rounded h-100">
                <h6>Seasonal Discount</h6>
                <p class="mb-2 text-muted">Living Room Refresh - 12% off sofas over KSh 20,000.</p>
                <span class="badge bg-success-subtle text-success">Active</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-3 border rounded h-100">
                <h6>Bundle Offer</h6>
                <p class="mb-2 text-muted">Bed + Mattress combo discount: KSh 3,500.</p>
                <span class="badge bg-warning-subtle text-warning">Scheduled</span>
            </div>
        </div>
    </div>
</x-admin.section-card>
@endsection
