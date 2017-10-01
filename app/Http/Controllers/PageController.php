<?php

namespace App\Http\Controllers;

use App\Booze;
use App\Food;
use Illuminate\Http\Request;
use App\Event;

class PageController extends Controller
{
    public function splash()
    {
        $events = Event::orderBy('date', 'desc')->paginate(12);

        return view('pages.splash', compact('events'));
    }

    public function liquor()
    {
        return view('pages.liquor');
    }
}
