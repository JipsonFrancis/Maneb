<?php

namespace App\Http\Controllers;

use App\Models\Transit;
use Illuminate\Http\Request;

class TransitController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Transit.transit', ['transits' => Transit::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // create a transit and store it in the db
        $transit = Transit::create([
            'name' => $request->name,
            'driver_id' => $request->driver_id,
            'truck_id' => $request->truck_id,
            'initial_location' => $request->initial_location,
            'destination' => $request->destination
        ]);

        return back()->with('success', $transit->name.' transit has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete a tr$transit
        $transit = Transit::findOrFail((int)$id);

        $transit->delete();

        return redirect()->back()->with('success', $transit->name.' from been deleted');
    }
}
