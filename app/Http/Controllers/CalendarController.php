<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    // Create an event
    public function store(Request $request)
    {
        $event = Event::create($request->all());
        return response()->json($event);
    }

    // Update an event
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return response()->json(['success' => true]);
    }

    // Delete an event
    public function destroy($id)
    {
        Event::destroy($id);
        return response()->json(['success' => true]);
    }
}

