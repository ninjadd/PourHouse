<?php

namespace App\Http\Controllers;

use App\Event;
use App\Time;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $times = Time::all();

        return view('event.create', compact('times'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'artist' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|string',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'image' => 'required|url',
            'category' => 'required|string'
        ]);

        $event = new Event();
        $event->create([
            'user_id' => auth()->id(),
            'artist' => $request->artist,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'description' => $request->description,
            'date' => (!empty($request->date)) ? date('Y-m-d H:i:s', strtotime($request->date)) : $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'image' => $request->image,
            'category' => $request->category
        ]);

        return back()->with('status', 'You created a new Event good job!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $times = Time::all();

        return view('event.edit', compact('event', 'times'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'artist' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|string',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'image' => 'required|url',
            'category' => 'required|string'
        ]);

        $event->update([
            'user_id' => auth()->id(),
            'artist' => $request->artist,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'description' => $request->description,
            'date' => (!empty($request->date)) ? date('Y-m-d H:i:s', strtotime($request->date)) : $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'image' => $request->image,
            'category' => $request->category
        ]);

        return back()->with('status', 'You updated this Event good job!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return back()->with('status', 'That event is gone now!');
    }
}
