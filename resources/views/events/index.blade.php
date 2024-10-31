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
                            <x-modal-show-events :event="$event" />
                            <x-modal-delete-events :event="$event" />
                            <td>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--edit]"></span></button>
                                <button type="button" title="Delete Event" class="btn btn-circle btn-text btn-sm"
                                    aria-label="Action button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="modal-delete{{ $event->id }}"
                                    data-overlay="#modal-delete{{ $event->id }}"><span
                                        class="icon-[tabler--trash]"></span></button>
                                <button type="button" title="Show Details" class="btn btn-circle btn-text btn-sm"
                                    aria-label="Action button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="modal-show{{ $event->id }}"
                                    data-overlay="#modal-show{{ $event->id }}"><span
                                        class="icon-[tabler--list-search]"></span></button>
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
