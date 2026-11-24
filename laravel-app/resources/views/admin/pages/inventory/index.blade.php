@extends('admin.layouts.app')

@section('title', 'Inventory')
@section('page-title', 'Inventory Management')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-md-4"><div class="card"><div class="card-body"><h5>Stock Overview</h5><p class="mb-0 text-muted">426 active SKUs across all furniture categories.</p></div></div></div>
    <div class="col-md-4"><div class="card"><div class="card-body"><h5>Low-Stock Alerts</h5><p class="mb-0 text-muted">18 items below reorder threshold.</p></div></div></div>
    <div class="col-md-4"><div class="card"><div class="card-body"><h5>Out-of-Stock</h5><p class="mb-0 text-muted">7 items need urgent replenishment.</p></div></div></div>
</div>

<x-admin.section-card title="Stock Updates" subtitle="Ready for stock movement posting and warehouse sync">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead><tr><th>SKU</th><th>Product</th><th>Current Stock</th><th>Reorder Level</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>BTF-CNB-021</td><td>Cozy Nest Baby Crib</td><td>5</td><td>10</td><td><span class="badge bg-danger-subtle text-danger">Low</span></td></tr>
                <tr><td>BTF-NDS-007</td><td>Nordic 6-Seater Dining Set</td><td>7</td><td>8</td><td><span class="badge bg-warning-subtle text-warning">Watch</span></td></tr>
                <tr><td>BTF-HCS-001</td><td>Haven Corner Sectional Seat</td><td>12</td><td>10</td><td><span class="badge bg-success-subtle text-success">Healthy</span></td></tr>
            </tbody>
        </table>
    </div>
</x-admin.section-card>
@endsection
