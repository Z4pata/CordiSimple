@props(['status'])

@if ($status == 'available')
    <span class="badge badge-soft badge-success text-xs">{{ $status }}</span>
@endif

@if ($status == 'cancelled')
    <span class="badge badge-soft badge-error text-xs">{{ $status }}</span>
@endif

@if ($status == 'finished')
    <span class="badge badge-soft badge-primary text-xs">{{ $status }}</span>
@endif

@if ($status == 'not available')
    <span class="badge badge-soft badge-warning text-xs">{{ $status }}</span>
@endif
