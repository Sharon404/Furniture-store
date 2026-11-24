@extends('admin.layouts.app')

@section('title', 'Edit Product')
@section('page-title', 'Edit Product')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
    <li class="breadcrumb-item active">Edit {{ $sku }}</li>
@endsection

@section('content')
<x-admin.section-card title="Edit Product {{ $sku }}" subtitle="Data binding to be connected to product repository/model">
    <p class="mb-0">This route is prepared for real edit workflows. Wire this page to your Product model, validation, and media management service.</p>
</x-admin.section-card>
@endsection
