@extends('admin.layouts.app')

@section('title', 'Product Variations')
@section('page-title', 'Product Variations')

@section('content')
<x-admin.section-card title="Variation Matrix" subtitle="Configure sizes, colors, fabrics, and material options">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead><tr><th>SKU</th><th>Variation</th><th>Stock</th><th>Price Delta</th></tr></thead>
            <tbody>
            <tr><td>BTF-BED-001-SM</td><td>Single / Walnut</td><td>11</td><td>+0</td></tr>
            <tr><td>BTF-BED-001-QN</td><td>Queen / Walnut</td><td>7</td><td>+4,000</td></tr>
            <tr><td>BTF-SFA-011-LN</td><td>Linen / Beige</td><td>13</td><td>+1,500</td></tr>
            </tbody>
        </table>
    </div>
</x-admin.section-card>
@endsection
