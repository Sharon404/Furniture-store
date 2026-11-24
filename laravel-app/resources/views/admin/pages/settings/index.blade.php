@extends('admin.layouts.app')

@section('title', 'Store Settings')
@section('page-title', 'Store Settings')

@section('content')
<div class="row g-3">
    <div class="col-lg-6">
        <x-admin.section-card title="General Store Settings">
            <form class="row g-3" onsubmit="return false;">
                <div class="col-12"><label class="form-label">Store Name</label><input class="form-control" value="BEDS - TREND FURNITURE"></div>
                <div class="col-12"><label class="form-label">Support Email</label><input class="form-control" value="hello@bedstrendfurniture.com"></div>
                <div class="col-12"><label class="form-label">Phone</label><input class="form-control" value="+254 712 345 678"></div>
                <div class="col-12"><button class="btn btn-primary" type="button" disabled>Save Changes (Backend Pending)</button></div>
            </form>
        </x-admin.section-card>
    </div>
    <div class="col-lg-6">
        <x-admin.section-card title="Operational Preferences">
            <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" checked><label class="form-check-label">Enable low-stock notifications</label></div>
            <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" checked><label class="form-check-label">Send order confirmation emails</label></div>
            <div class="form-check form-switch"><input class="form-check-input" type="checkbox"><label class="form-check-label">Auto-publish draft products</label></div>
        </x-admin.section-card>
    </div>
</div>
@endsection
