@extends('layouts.event')

@section('content')
    <div class="flex flex-row flex-wrap justify-around">
        @forelse ($events as $event)
            <div class="mx-3 my-5">
                <div class="group w-80 h-80 relative block h-64 sm:h-80 lg:h-96">
                    <span class="absolute inset-0 border-2 border-dashed border-orange-600"></span>
                    <div
                        class="relative flex h-full transform items-end border-2 border-orange-600 bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                        <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                            <h3 class="mt-4 text-xl text-orange-600 font-medium sm:text-2xl">{{ $event->name }}</h3>

                            <p class="mt-4 text-sm text-orange-600 sm:text-base">
                                {{ $event->description }}
                            </p>
                        </div>

                        <div
                            class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                            <h3 class="mt-4 text-xl text-orange-600 font-medium sm:text-2xl">{{ $event->name }}</h3>

                            <p class="mt-4 text-sm text-orange-600 sm:text-base">
                                {{ $event->description }}
                            </p>
                            <p class="text-orange-600"><span class="font-bold">Date: </span>{{ $event->date }}</p>
                            <p class="text-orange-600"><span class="font-bold">Time: </span>{{ $event->time }}</p>
                            <p class="text-orange-600"><span class="font-bold">Location: </span>{{ $event->location }}</p>

                            <button class="inline-flex items-center gap-2 mt-8 border-2 border-orange-600 bg-orange-600 px-8 py-3 text-white hover:bg-transparent hover:text-orange-600 focus:outline-none active:text-orange-500"
                                href="#">
                                <span class="text-sm font-medium"> Book now! </span>

                                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
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
