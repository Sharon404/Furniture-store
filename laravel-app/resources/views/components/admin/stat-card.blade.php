@props([
    'label',
    'value',
    'trend' => null,
    'icon' => 'ri-pie-chart-2-line',
    'color' => 'primary',
])

<div class="col-xxl-2 col-md-4 col-sm-6">
    <div class="card card-animate h-100">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <p class="text-uppercase fw-medium text-muted mb-0">{{ $label }}</p>
                    <h4 class="fs-22 fw-semibold ff-secondary mb-1">{{ $value }}</h4>
                    @if($trend)
                        <span class="badge bg-{{ str_starts_with($trend, '-') ? 'danger' : 'success' }}-subtle text-{{ str_starts_with($trend, '-') ? 'danger' : 'success' }}">{{ $trend }}</span>
                    @endif
                </div>
                <div class="avatar-sm">
                    <span class="avatar-title bg-{{ $color }}-subtle text-{{ $color }} rounded-circle fs-3">
                        <i class="{{ $icon }}"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
