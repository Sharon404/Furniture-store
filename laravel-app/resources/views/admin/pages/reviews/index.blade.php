@extends('admin.layouts.app')

@section('title', 'Reviews and Ratings')
@section('page-title', 'Reviews and Ratings')

@section('content')
<x-admin.section-card title="Latest Reviews" subtitle="Moderation queue and rating summaries">
    <ul class="list-group list-group-flush">
        <li class="list-group-item px-0 d-flex justify-content-between"><span>Haven Corner Sectional Seat - 4.8/5</span><span class="text-muted">12 new reviews</span></li>
        <li class="list-group-item px-0 d-flex justify-content-between"><span>Mist Grey Upholstered Bed - 4.6/5</span><span class="text-muted">9 new reviews</span></li>
        <li class="list-group-item px-0 d-flex justify-content-between"><span>Cozy Nest Baby Crib - 4.9/5</span><span class="text-muted">4 new reviews</span></li>
    </ul>
</x-admin.section-card>
@endsection
