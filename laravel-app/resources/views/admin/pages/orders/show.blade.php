@extends('admin.layouts.app')

@section('title', 'Order Details')
@section('page-title', 'Order Details: ' . $orderId)

@section('content')
<div class="row">
    <div class="col-lg-8">
        <x-admin.section-card title="Items">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead><tr><th>Product</th><th>Qty</th><th>Unit Price</th><th>Total</th></tr></thead>
                    <tbody>
                    <tr><td>Haven Corner Sectional Seat</td><td>1</td><td>KSh 16,800</td><td>KSh 16,800</td></tr>
                    <tr><td>Mist Grey Upholstered Bed</td><td>1</td><td>KSh 18,450</td><td>KSh 18,450</td></tr>
                    </tbody>
                </table>
            </div>
        </x-admin.section-card>
    </div>
    <div class="col-lg-4">
        <x-admin.section-card title="Customer & Delivery">
            <p class="mb-1"><strong>Customer:</strong> Preview customer</p>
            <p class="mb-1"><strong>Payment:</strong> Paid via M-Pesa</p>
            <p class="mb-0"><strong>Delivery:</strong> Scheduled for next business day</p>
        </x-admin.section-card>
    </div>
</div>
@endsection
