<?php

namespace App\Http\Controllers;

use App\Models\Blackbox;
use Illuminate\Http\Request;

class BlackboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Boxes.boxes', ['boxes' => Blackbox::all()]);
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
        // create a box and store it in the db
        $box = Blackbox::create([
            'name' => $request->name,
            'QR' => $request->QR,
            'transit_id' => $request->transit_id,
            'initial_location' => $request->initial_location,
            'current_location' => $request->current_location,
            'destination' => $request->destination
        ]);

        return back()->with('success', $box->name.' box has been created.');
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
        //delete a box
        $box = Blackbox::findOrFail((int)$id);

        $box->delete();

        return redirect()->back()->with('success', $box->name.' from been deleted');
    }
}
