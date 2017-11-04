<?php

namespace App\Http\Controllers;

use App\Mail\BookUs;
use App\Mail\ContactUs;
use App\MenuItem;
use App\Type;
use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function splash()
    {
        $events = Event::orderByRaw('ABS(DATEDIFF(events.date, NOW()))')->paginate(24);
        $menuItems = MenuItem::all();
        $types = Type::orderBy('id', 'asc')->get();

        $calendarEvents = Event::orderBy('date', 'desc')->get();

        return view('pages.splash', compact('events', 'menuItems', 'types', 'calendarEvents'));
    }

    public function sendContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string'
        ]);

        Mail::to('pourhouseoceanside@gmail.com')->send(new ContactUs($request));

        return back();
    }

    public function sendBook(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string'
        ]);

        Mail::to('pourhouseoceansidebooking@gmail.com')->send(new BookUs($request));

        return back();
    }
}
