<?php

namespace App\Http\Controllers;

use App\MenuItem;
use App\Type;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * MenuItemController constructor.
     */
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
        $menuItems = MenuItem::all();

        return view('menu.index', compact('menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::orderBy('name', 'asc')->get();

        return view('menu.create', compact('types'));
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
            'title' => 'required|string',
            'type' => 'required|integer',
            'description' => 'required|string'
        ]);

        $price = str_replace('$', '', $request->price);

        $menuItem = new MenuItem();
        $menuItem->create([
            'user_id' => auth()->id(),
            'type_id' => $request->type,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'description' => $request->description,
            'price' => $price
        ]);

        return back()->with('status', 'You created a new Menu Item good job! Feel free to create a new one.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItem $menuItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuItem $menuItem)
    {
        $types = Type::orderBy('name', 'asc')->get();

        return view('menu.edit', compact('menuItem', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuItem $menuItem)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'type' => 'required|integer',
            'description' => 'required|string'
        ]);

        $price = str_replace('$', '', $request->price);

        $menuItem->update([
            'user_id' => auth()->id(),
            'type_id' => $request->type,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'description' => $request->description,
            'price' => $price
        ]);

        return back()->with('status', 'You updated a Menu Item good job!');
    }

    /**
     * @param MenuItem $menuItem
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();

        return back()->with('status', 'That Menu Item is gone now!');
    }
}
