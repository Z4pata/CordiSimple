@props(['status'])

@if ($status == 'Available')
    <span class="badge badge-soft badge-success text-xs">{{ $status }}</span>
@endif

@if ($status == 'Cancelled')
    <span class="badge badge-soft badge-error text-xs">{{ $status }}</span>
@endif

@if ($status == 'Finished')
    <span class="badge badge-soft badge-primary text-xs">{{ $status }}</span>
@endif

@if ($status == 'Not available')
    <span class="badge badge-soft badge-warning text-xs">{{ $status }}</span>
@endif
