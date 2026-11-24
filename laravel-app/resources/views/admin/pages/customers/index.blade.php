@extends('admin.layouts.app')

@section('title', 'Customers')
@section('page-title', 'Customer Management')

@section('content')
<x-admin.section-card title="Customer List" subtitle="Profiles, contacts, and order history entry points">
    <div class="table-responsive">
        <table class="table table-nowrap align-middle mb-0">
            <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Orders</th><th>Lifetime</th><th></th></tr></thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                    <td>{{ $customer['orders'] }}</td>
                    <td>{{ $customer['lifetime'] }}</td>
                    <td><a href="{{ route('admin.customers.show', strtolower($customer['id'])) }}" class="btn btn-sm btn-soft-secondary">Profile</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-admin.section-card>
@endsection
