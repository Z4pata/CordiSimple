<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(Request $request)
    {
        $validatedData = $request->validated();

        Event::create($validatedData);
        return redirect()->route(route: 'events.index')->with('success', 'The event was created correctly.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', data: compact('event'));
    }

    /**
     * Display the available events.
     */
    public function availables()
    {
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
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
