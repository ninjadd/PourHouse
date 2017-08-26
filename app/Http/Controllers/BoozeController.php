<?php

namespace App\Http\Controllers;

use App\Booze;
use Illuminate\Http\Request;

class BoozeController extends Controller
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
        $boozes = Booze::all();

        return view('booze.index', compact('boozes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booze.create');
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
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        $booze = new Booze();
        $booze->create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return back()->with('status', 'You created a new Booze good job!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booze  $booze
     * @return \Illuminate\Http\Response
     */
    public function show(Booze $booze)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booze  $booze
     * @return \Illuminate\Http\Response
     */
    public function edit(Booze $booze)
    {
        return view('booze.edit', compact('booze'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booze  $booze
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booze $booze)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);


        $booze->update([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return back()->with('status', 'You updated this Booze good job!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booze  $booze
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booze $booze)
    {
        $booze->delete();

        return back()->with('status', 'That booze is gone now!');
    }
}
