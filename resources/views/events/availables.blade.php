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
                            <td class="text-nowrap">{{ $event . name }}</td>
                            <td>{{ $event . date }}</td>
                            <td class="text-nowrap">{{ $event . time }}</td>
                            <td class="text-nowrap">{{ $event . location }}</td>
                            <td><span class="badge badge-soft badge-success text-xs">{{ $event . status }}</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--check]"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--alarm]"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--dots-vertical]"></span></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">No events available</td>
                        </tr>
                    @endforelse

                    {{-- <tr>
                        <td class="text-nowrap">Partido de Nacional</td>
                        <td>10/10/2025</td>
                        <td class="text-nowrap">07:00 PM</td>
                        <td class="text-nowrap">Medellín, Antioquia</td>
                        <td><span class="badge badge-soft badge-success text-xs">Available</span></td>
                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--check]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--alarm]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--dots-vertical]"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">Partido de Junior</td>
                        <td>20/05/2025</td>
                        <td class="text-nowrap">07:00 PM</td>
                        <td class="text-nowrap">Barranquilla, Atlántico</td>
                        <td><span class="badge badge-soft badge-success text-xs">Available</span></td>
                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--check]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--alarm]"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                    class="icon-[tabler--dots-vertical]"></span></button>
                        </td>
                    </tr> --}}

                </tbody>
            </table>
        </div>
    </div>
@endsection
