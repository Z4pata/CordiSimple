<div id="modal-create" class="overlay modal overlay-open:opacity-100 hidden" role="dialog" tabindex="-1">
    <div class="modal-dialog overlay-open:opacity-100 modal-dialog-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Create New Event</h3>
                <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                    data-overlay="#modal-create">
                    <span class="icon-[tabler--x] size-4"></span>
                </button>
            </div>
            <form>
                <div class="modal-body pt-0">
                    <div class="mb-7 flex gap-4 max-sm:flex-col">
                        <label for="EventName"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3  focus-within:border-orange-700">
                            <input type="text" id="EventName" placeholder="Musical concert"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Name
                            </span>
                        </label>
                        <label for="date"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="date" id="date" name="date"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Date
                            </span>
                        </label>
                    </div>
                    <div class="mb-7 flex gap-4 max-sm:flex-col">
                        <label for="time"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="time" id="time" name="time"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Time
                            </span>
                        </label>
                        <label for="status"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <select id="status" name="status"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="available">Available</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="finished">Finished</option>
                                <option value="not available">Not Available</option>
                            </select>
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Status
                            </span>
                        </label>
                    </div>
                    <div class="mb-7 flex gap-4 max-sm:flex-col">
                        <label for="max_seats"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="number" id="max_seats" name="max_seats" placeholder="Max Seats" min="0"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Max Seats
                            </span>
                        </label>
                        <label for="available_seats"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="number" id="available_seats" name="available_seats"
                                placeholder="Available Seats" min="0"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Available Seats
                            </span>
                        </label>
                    </div>
                    <div class="mb-7 flex gap-4 max-sm:flex-col">
                        <label for="location"
                            class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                            <input type="text" id="location" name="location" placeholder="City"
                                class="input input-filled peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                required />
                            <span
                                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                Location
                            </span>
                        </label>
                    </div>
                    <label for="description"
                        class="w-80 relative block overflow-hidden border-b border-orange-400 bg-transparent pt-3 focus-within:border-orange-700">
                        <textarea id="description" name="description" placeholder="Describe the event"
                            class="input input-filled peer h-16 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                            style="max-height: 100px; overflow-y: auto;" required></textarea>
                        <span
                            class="absolute start-0 top-2 -translate-y-1/2 text-xs text-orange-600 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                            Description
                        </span>
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-soft btn-secondary" data-overlay="#modal-create">Cancel</button>
                    <button class="btn btn-soft btn-success">Success</button>
                </div>
            </form>
        </div>
    </div>
</div>
