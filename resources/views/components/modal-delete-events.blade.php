@props(['event'])

{{-- Modal to confirm the elimination of events. --}}
<div id="modal-delete{{ $event->id }}" class="overlay modal overlay-open:opacity-100 hidden" role="dialog"
    tabindex="-1">
    <div class="modal-dialog overlay-open:opacity-100">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Confirm Deletion</h3>
                <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                    data-overlay="#modal-delete{{ $event->id }}">
                    <span class="icon-[tabler--x] size-4"></span>
                </button>
            </div>
            <div class="modal-body">
                <h2>Are you sure you want to delete this event?</h2>
            </div>
            <div class="modal-footer">
                <form action="{{ route('events.destroy', $event) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-soft btn-error"
                        data-overlay="#modal-delete{{ $event->id }}">Delete</button>
                </form>
                <button type="button" class="btn btn-soft btn-secondary"
                    data-overlay="#modal-delete{{ $event->id }}">Close</button>
            </div>
        </div>
    </div>
</div>
