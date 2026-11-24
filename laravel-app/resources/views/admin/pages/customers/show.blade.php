@extends('admin.layouts.app')

@section('title', 'Customer Profile')
@section('page-title', 'Customer Profile: ' . $customerId)

@section('content')
<div class="row">
    <div class="col-lg-4">
        <x-admin.section-card title="Profile Summary">
            <p class="mb-1"><strong>ID:</strong> {{ $customerId }}</p>
            <p class="mb-1"><strong>Email:</strong> customer{{ strtolower($customerId) }}@example.com</p>
            <p class="mb-0"><strong>Contact:</strong> +254700000000</p>
        </x-admin.section-card>
    </div>
    <div class="col-lg-8">
        <x-admin.section-card title="Order History">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0">BTF-9021 - KSh 84,500 - Pending</li>
                <li class="list-group-item px-0">BTF-8974 - KSh 23,700 - Completed</li>
                <li class="list-group-item px-0">BTF-8832 - KSh 31,400 - Completed</li>
            </ul>
        </x-admin.section-card>
    </div>
</div>
@endsection
