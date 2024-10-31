@extends('layouts.event')

@section('content')
    <div class="card w-full">
        <div class="w-full overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($events as $event)
                        <tr>
                            <td class="text-nowrap">{{ $event->name }}</td>
                            <td>{{ $event->date }}</td>
                            <td class="text-nowrap">{{ $event->time }}</td>
                            <td class="text-nowrap">{{ $event->location }}</td>
                            <td><x-status-events :status="$event->status" /></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--edit]"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--trash]"></span></button>
                                <button type="button" class="btn btn-circle btn-text btn-sm" aria-label="Action button"
                                    aria-haspopup="dialog" aria-expanded="false" aria-controls="basic-modal"
                                    data-overlay="#basic-modal"><span class="icon-[tabler--list-search]"></span></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">No events available</td>
                        </tr>
                    @endforelse


                    {{-- this is an example of non-functional events --}}

                    {{-- <tr>
                        <td class="text-nowrap">Partido de Nacional</td>
                        <td>10/10/2025</td>
                        <td class="text-nowrap">07:00 PM</td>
                        <td class="text-nowrap">Medellín, Antioquia</td>
                        <td><span class="badge badge-soft badge-success text-xs">Available</span></td>
                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--edit]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--trash]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--list-search]"></span></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-nowrap">Partido de Junior</td>
                        <td>20/05/2025</td>
                        <td class="text-nowrap">07:00 PM</td>
                        <td class="text-nowrap">Barranquilla, Atlántico</td>
                        <td><span class="badge badge-soft badge-error text-xs">Cancelled</span></td>
                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--edit]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--trash]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--list-search]"></span></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-nowrap">Partido de Nacional</td>
                        <td>10/10/2025</td>
                        <td class="text-nowrap">07:00 PM</td>
                        <td class="text-nowrap">Medellín, Antioquia</td>
                        <td><span class="badge badge-soft badge-warning text-xs">Not available</span></td>
                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--edit]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--trash]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--list-search]"></span></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-nowrap">Partido de Nacional</td>
                        <td>10/10/2025</td>
                        <td class="text-nowrap">07:00 PM</td>
                        <td class="text-nowrap">Medellín, Antioquia</td>
                        <td><span class="badge badge-soft badge-primary text-xs">Finished</span></td>
                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--edit]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--trash]"></span></button>
                            <button type="button" class="btn btn-circle btn-text btn-sm" aria-label="Action button"
                                aria-haspopup="dialog" aria-expanded="false" aria-controls="basic-modal"
                                data-overlay="#basic-modal"><span class="icon-[tabler--list-search]"></span></button>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        {{-- <button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false"
            aria-controls="basic-modal" data-overlay="#basic-modal"> Open modal </button> --}}

        <div id="basic-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog" tabindex="-1">
            <div class="modal-dialog overlay-open:opacity-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Dialog Title</h3>
                        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                            aria-label="Close" data-overlay="#basic-modal">
                            <span class="icon-[tabler--x] size-4"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the
                        text in the
                        modal, we use an inline style to set a minimum height, thereby extending the length of the overall
                        modal and
                        demonstrating the overflow scrolling. When content becomes longer than the height of the viewport,
                        scrolling
                        will move the modal as needed.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-soft btn-secondary" data-overlay="#basic-modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
