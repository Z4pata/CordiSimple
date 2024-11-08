@props(['event' => null])
@php
    $number = $event ? $event->id : 0;
@endphp

<div id="modal-create{{ $number }}" class="overlay modal overlay-open:opacity-100 hidden" role="dialog"
    tabindex="-1">
    <div class="modal-dialog overlay-open:opacity-100 modal-dialog-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ $event ? 'Update Event' : 'Create New Event' }}
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                        data-overlay="#modal-create{{ $number }}">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </h3>
            </div>
            <form method="POST" action="{{ $event ? route('events.update', $event->id) : route('events.store') }}">
                @csrf
                @if ($event)
                    @method('PUT')
                @endif

                <div class="modal-body pt-0">

                    <div class="mb-7 flex gap-4 max-sm:flex-col">

                        <label for="name"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="text" id="name" placeholder="Musical concert" name="name"
                                value="{{ old('name', $event->name ?? '') }}"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Name
                            </span>
                        </label>
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                        <label for="date"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="date" id="date" name="date"
                                value="{{ old('date', $event->date ?? '') }}"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Date
                            </span>
                        </label>
                        @error('date')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-7 flex gap-4 max-sm:flex-col">

                        <label for="time"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="time" id="time" name="time"
                                value="{{ old('time', $event->time ?? '') }}"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Time
                            </span>
                        </label>
                        @error('time')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                        <label for="status"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <select id="status" name="status"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required>
                                <option value="" disabled>Select Status</option>
                                <option class="text-orange-600" value="available" @selected(old('status', $event->status ?? '') == 'available')>Available
                                </option>
                                <option class="text-orange-600" value="cancelled" @selected(old('status', $event->status ?? '') == 'cancelled')>Cancelled
                                </option>
                                <option class="text-orange-600" value="finished" @selected(old('status', $event->status ?? '') == 'finished')>Finished
                                </option>
                                <option class="text-orange-600" value="not available" @selected(old('status', $event->status ?? '') == 'not available')>Not
                                    Available</option>
                            </select>

                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Status
                            </span>
                        </label>
                        @error('status')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-7 flex gap-4 max-sm:flex-col">

                        <label for="max_seats"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="number" id="max_seats" name="max_seats" placeholder="Max Seats" min="0"
                                value="{{ old('max_seats', $event->max_seats ?? '') }}"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Max Seats
                            </span>
                        </label>
                        @error('max_seats')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                        @if (!$event)
                            <label for="available_seats"
                                class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                                <input type="number" id="available_seats" name="available_seats"
                                    placeholder="Available Seats" min="0"
                                    value="{{ old('available_seats', $event->available_seats ?? '') }}"
                                    class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                    required />
                                <span
                                    class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Available Seats
                                </span>
                            </label>
                            @error('available_seats')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        @endif

                    </div>

                    <div class="mb-7 flex gap-4 max-sm:flex-col">

                        <label for="location"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="text" id="location" name="location" placeholder="City"
                                value="{{ old('location', $event->location ?? '') }}"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Location
                            </span>
                        </label>
                        @error('location')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <label for="description"
                        class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                        <textarea id="description" name="description" placeholder="Describe the event"
                            class="input input-filled peer h-16 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                            style="max-height: 100px; overflow-y: auto;" required>{{ old('description', $event->description ?? '') }}
                        </textarea>
                        <span
                            class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                            Description
                        </span>
                    </label>
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-soft btn-secondary"
                        data-overlay="#modal-create{{ $number }}">Cancel</button>
                    <button type="submit" class="btn btn-soft btn-success">Success</button>
                </div>

            </form>
        </div>
    </div>
</div>
