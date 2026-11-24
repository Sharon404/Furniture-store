@extends('admin.layouts.app')

@section('title', 'Products')
@section('page-title', 'Product Management')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
    <li class="breadcrumb-item active">Products</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <x-admin.section-card title="All Products" subtitle="Preview list for integration wiring">
            <div class="d-flex flex-wrap gap-2 mb-3">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">Add New Product</a>
                <a href="{{ route('admin.products.categories') }}" class="btn btn-soft-primary btn-sm">Categories</a>
                <a href="{{ route('admin.products.images') }}" class="btn btn-soft-primary btn-sm">Images</a>
                <a href="{{ route('admin.products.variations') }}" class="btn btn-soft-primary btn-sm">Variations</a>
                <a href="{{ route('admin.products.pricing') }}" class="btn btn-soft-primary btn-sm">Pricing & Discounts</a>
                <a href="{{ route('admin.products.status') }}" class="btn btn-soft-primary btn-sm">Status</a>
            </div>
            <div class="table-responsive">
                <table class="table table-nowrap align-middle mb-0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product['name'] }}</td>
                            <td>{{ $product['category'] }}</td>
                            <td>{{ $product['stock'] }}</td>
                            <td>{{ $product['price'] }}</td>
                            <td><span class="badge bg-light text-dark">{{ $product['status'] }}</span></td>
                            <td>
                                <a href="{{ route('admin.products.edit', ['sku' => str_replace(' ', '-', strtolower($product['name']))]) }}" class="btn btn-sm btn-soft-secondary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </x-admin.section-card>
    </div>
</div>
@endsection
