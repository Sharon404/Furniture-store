@extends('admin.layouts.app')

@section('title', 'Product Categories')
@section('page-title', 'Product Categories')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
    <li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')
<x-admin.section-card title="Category Directory" subtitle="Maintain grouping structure for storefront filters and merchandising">
    <div class="table-responsive">
        <table class="table table-nowrap align-middle mb-0">
            <thead><tr><th>Category</th><th>Products</th><th>Actions</th></tr></thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category['name'] }}</td>
                    <td>{{ $category['count'] }}</td>
                    <td><button type="button" class="btn btn-sm btn-soft-secondary" disabled>Edit (pending backend)</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-admin.section-card>
@endsection
