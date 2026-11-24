@extends('admin.layouts.app')

@section('title', 'Product Images')
@section('page-title', 'Product Images')

@section('content')
<x-admin.section-card title="Image Management" subtitle="Define featured image, gallery ordering, and media metadata">
    <div class="row g-3">
        <div class="col-md-4"><div class="border rounded p-3 h-100">Primary product image slot</div></div>
        <div class="col-md-4"><div class="border rounded p-3 h-100">Gallery image slot #1</div></div>
        <div class="col-md-4"><div class="border rounded p-3 h-100">Gallery image slot #2</div></div>
    </div>
</x-admin.section-card>
@endsection
