@extends('admin.layouts.app')

@section('title', 'Admin Profile')
@section('page-title', 'Admin Profile and Account Settings')

@section('content')
<div class="row g-3">
    <div class="col-lg-4">
        <x-admin.section-card title="Account Summary">
            <p class="mb-1"><strong>Name:</strong> {{ auth()->user()->name ?? 'Admin User' }}</p>
            <p class="mb-1"><strong>Email:</strong> {{ auth()->user()->email ?? 'admin@example.com' }}</p>
            <p class="mb-0"><strong>Access:</strong> Administrator</p>
        </x-admin.section-card>
    </div>
    <div class="col-lg-8">
        <x-admin.section-card title="Profile Settings">
            <form class="row g-3" onsubmit="return false;">
                <div class="col-md-6"><label class="form-label">Display Name</label><input class="form-control" value="{{ auth()->user()->name ?? '' }}"></div>
                <div class="col-md-6"><label class="form-label">Email</label><input class="form-control" value="{{ auth()->user()->email ?? '' }}"></div>
                <div class="col-12"><button class="btn btn-primary" type="button" disabled>Update Profile (Backend Pending)</button></div>
            </form>
        </x-admin.section-card>
    </div>
</div>
@endsection
