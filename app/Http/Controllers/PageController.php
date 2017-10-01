<?php

namespace App\Http\Controllers;

use App\MenuItem;
use App\Type;
use Illuminate\Http\Request;
use App\Event;

class PageController extends Controller
{
    public function splash()
    {
        $events = Event::orderBy('date', 'desc')->paginate(12);
        $menuItems = MenuItem::all();
        $types = Type::orderBy('id', 'asc')->get();

        return view('pages.splash', compact('events', 'menuItems', 'types'));
    }
}
