@extends('admin.layouts.app')

@section('title', 'Product Status')
@section('page-title', 'Product Status')

@section('content')
<x-admin.section-card title="Publishing and Catalog Status" subtitle="Track live, draft, archived and hidden products">
    <div class="row g-3">
        <div class="col-md-3"><div class="p-3 border rounded text-center"><h4>318</h4><p class="mb-0 text-muted">Published</p></div></div>
        <div class="col-md-3"><div class="p-3 border rounded text-center"><h4>46</h4><p class="mb-0 text-muted">Draft</p></div></div>
        <div class="col-md-3"><div class="p-3 border rounded text-center"><h4>22</h4><p class="mb-0 text-muted">Archived</p></div></div>
        <div class="col-md-3"><div class="p-3 border rounded text-center"><h4>40</h4><p class="mb-0 text-muted">Hidden</p></div></div>
    </div>
</x-admin.section-card>
@endsection
