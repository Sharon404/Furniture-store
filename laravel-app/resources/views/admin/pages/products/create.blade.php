@extends('admin.layouts.app')

@section('title', 'Add Product')
@section('page-title', 'Add New Product')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
    <li class="breadcrumb-item active">Add New</li>
@endsection

@section('content')
<x-admin.section-card title="Product Entry Form" subtitle="Form layout ready for backend validation and persistence">
    <form class="row g-3" onsubmit="return false;">
        <div class="col-md-6">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" placeholder="e.g. Harbor Queen Bed">
        </div>
        <div class="col-md-3">
            <label class="form-label">Category</label>
            <select class="form-select"><option>Beds</option><option>Sofas & Couches</option><option>Dining Sets</option></select>
        </div>
        <div class="col-md-3">
            <label class="form-label">Status</label>
            <select class="form-select"><option>Draft</option><option>Published</option><option>Archived</option></select>
        </div>
        <div class="col-md-4">
            <label class="form-label">SKU</label>
            <input type="text" class="form-control" placeholder="BTF-BED-001">
        </div>
        <div class="col-md-4">
            <label class="form-label">Price (KSh)</label>
            <input type="number" class="form-control" placeholder="0">
        </div>
        <div class="col-md-4">
            <label class="form-label">Stock Quantity</label>
            <input type="number" class="form-control" placeholder="0">
        </div>
        <div class="col-12">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="4" placeholder="Detailed product description"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="button" disabled>Save Product (Backend Pending)</button>
        </div>
    </form>
</x-admin.section-card>
@endsection
