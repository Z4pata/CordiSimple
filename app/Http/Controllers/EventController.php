<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Artisan::call('app:update-event-status');
        $events = Event::all();
        return view('events.index', data: compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $validatedData = $request->validated();
        $adminId = Auth::id();
        $data = array_merge($validatedData, ['admin_id' => $adminId]);
        Event::create(attributes: $data);
        return redirect()->route('events.index')->with('success', 'The event was created correctly.');
    }

    /**
     * Display the specified resource.
     */
    //
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', data: compact('event'));
    }

    /**
     * Display the available events.
     */
    public function available()
    {
        Artisan::call('app:update-event-status');
        $events = Event::where('status', operator: 'Available')->get();
        return view('events.availables', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(EventUpdateRequest $request, string $id)
     {
         $validatedData = $request->validated();
         $event = Event::findOrFail($id);
         $event->update($validatedData);

         return redirect()->route('events.index')->with('success', 'The event was updated correctly.');
     }

    /**
     * Method to search for an event by its id and replace it with the incoming one.
     */
    public function destroy(Event $event)
    {
        //
    }
}
