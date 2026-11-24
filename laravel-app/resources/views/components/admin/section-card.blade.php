@props([
    'title',
    'subtitle' => null,
])

<div class="card">
    <div class="card-header border-0 align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">{{ $title }}</h4>
        @if($subtitle)
            <div class="flex-shrink-0 text-muted small">{{ $subtitle }}</div>
        @endif
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
