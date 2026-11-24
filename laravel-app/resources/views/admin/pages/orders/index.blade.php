@extends('admin.layouts.app')

@section('title', 'Orders')
@section('page-title', 'Order Management')

@section('content')
<x-admin.section-card title="Orders" subtitle="Payment and delivery status overview">
    <div class="d-flex flex-wrap gap-2 mb-3">
        <a href="{{ route('admin.orders.index') }}" class="btn btn-sm {{ $status === 'all' ? 'btn-primary' : 'btn-soft-primary' }}">All</a>
        <a href="{{ route('admin.orders.index', ['status' => 'pending']) }}" class="btn btn-sm {{ $status === 'pending' ? 'btn-primary' : 'btn-soft-primary' }}">Pending</a>
        <a href="{{ route('admin.orders.index', ['status' => 'processing']) }}" class="btn btn-sm {{ $status === 'processing' ? 'btn-primary' : 'btn-soft-primary' }}">Processing</a>
        <a href="{{ route('admin.orders.index', ['status' => 'shipped']) }}" class="btn btn-sm {{ $status === 'shipped' ? 'btn-primary' : 'btn-soft-primary' }}">Shipped</a>
        <a href="{{ route('admin.orders.index', ['status' => 'completed']) }}" class="btn btn-sm {{ $status === 'completed' ? 'btn-primary' : 'btn-soft-primary' }}">Completed</a>
        <a href="{{ route('admin.orders.index', ['status' => 'cancelled']) }}" class="btn btn-sm {{ $status === 'cancelled' ? 'btn-primary' : 'btn-soft-primary' }}">Cancelled</a>
    </div>
    <div class="table-responsive">
        <table class="table table-nowrap align-middle mb-0">
            <thead><tr><th>Order</th><th>Customer</th><th>Status</th><th>Payment</th><th>Delivery</th><th>Amount</th><th></th></tr></thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order['id'] }}</td>
                    <td>{{ $order['customer'] }}</td>
                    <td><span class="badge bg-light text-dark text-capitalize">{{ $order['status'] }}</span></td>
                    <td>{{ $order['payment'] }}</td>
                    <td>{{ $order['delivery'] }}</td>
                    <td>{{ $order['amount'] }}</td>
                    <td><a href="{{ route('admin.orders.show', strtolower($order['id'])) }}" class="btn btn-sm btn-soft-secondary">Details</a></td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center text-muted">No orders for this status.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-admin.section-card>
@endsection
