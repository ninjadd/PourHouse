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
        $events = Event::orderBy('date', 'desc')->paginate(4);
        $foods = Food::orderBy('menu')->get();
        $boozes = Booze::orderBy('name')->get();

        return view('pages.splash', compact('events', 'foods', 'food_menus', 'boozes'));
    }

    public function liquor()
    {
        return view('pages.liquor');
    }
}
