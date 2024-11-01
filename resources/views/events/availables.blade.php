@extends('layouts.event')

@section('content')
    <div class="flex flex-row flex-wrap justify-around">
        @forelse ($events as $event)
            <div class="mx-3 my-5">
                <div class="group w-80 h-80 relative block h-64 sm:h-80 lg:h-96">
                    <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                    <div
                        class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                        <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                            <h2 class="mt-4 text-xl font-medium sm:text-2xl">{{ $event->name }}</h2>
                        </div>

                        <div
                            class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                            <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $event->name }}</h3>

                            <p class="mt-4 text-sm sm:text-base">
                                {{ $event->description }}
                            </p>

                            <button type="button"
                                class="mt-4 font-bold block inline-block border-2 border-black bg-white px-12 py-3 text-sm font-medium sm:text-base hover:bg-transparent hover:text-orange-600 focus:outline-none focus:ring active:text-orange-500"
                                aria-haspopup="dialog" aria-expanded="false"
                                aria-controls="modal-available{{ $event->id }}"
                                data-overlay="#modal-available{{ $event->id }}"> Show Details
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-available{{ $event->id }}"
                class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog" tabindex="-1">
                <div class="modal-dialog overlay-open:opacity-100">
                    <div class="modal-content text-neutral-content bg-transparent shadow-none">
                        <div class="justify-center modal-header">
                            <h3 class="modal-title text-neutral-content">{{ $event->name }}</h3>
                            <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                                data-overlay="#modal-available{{ $event->id }}">
                                <span class="icon-[tabler--x] size-4"></span>
                            </button>
                        </div>
                        <div class="pt-8 text-center modal-body">
                            <p><span class="font-bold">Date: </span>{{ $event->date }}</p>
                            <p><span class="font-bold">Time: </span>{{ $event->time }}</p>
                            <p><span class="font-bold">Location: </span>{{ $event->location }}</p>
                        </div>
                        <div class="justify-around modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-overlay="#modal-available{{ $event->id }}">Close</button>
                            <button type="button" class="btn btn-orange">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <tr>
                <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">No events available</td>
            </tr>
        @endforelse
    </div>
@endsection
