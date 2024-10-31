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
                        <tr class="hover">
                            <td class="text-nowrap">{{ $event->name }}</td>
                            <td>{{ $event->date }}</td>
                            <td class="text-nowrap">{{ $event->time }}</td>
                            <td class="text-nowrap">{{ $event->location }}</td>
                            <td><x-status-events :status="$event->status" /></td>
                            <div id="basic-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog"
                                tabindex="-1">
                                <div class="modal-dialog overlay-open:opacity-100">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">General Information</h3>
                                            <button type="button"
                                                class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                                                aria-label="Close" data-overlay="#basic-modal">
                                                <span class="icon-[tabler--x] size-4"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><span class="font-bold">Name: </span>{{ $event->name }}</p>
                                            <p><span class="font-bold">Description: </span>{{ $event->description }}</p>
                                            <p><span class="font-bold">Date: </span>{{ $event->date }}</p>
                                            <p><span class="font-bold">Time: </span>{{ $event->time }}</p>
                                            <p><span class="font-bold">Location: </span>{{ $event->location }}</p>
                                            <p><span class="font-bold">Max Seats: </span>{{ $event->max_seats }}</p>
                                            <p><span class="font-bold">Available Seats: </span>{{ $event->available_seats }}</p>
                                            <p><span class="font-bold">Status: </span>{{ $event->status }}</p>
                                            <p><span class="font-bold">Created By: </span>{{ $event->user?->name ?? 'Name is not available' }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-soft btn-secondary"
                                                data-overlay="#basic-modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                </tbody>
            </table>
        </div>
    </div>
@endsection
