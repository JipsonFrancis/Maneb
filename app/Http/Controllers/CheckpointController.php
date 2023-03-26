<?php

namespace App\Http\Controllers;

use App\Models\Checkpoint;
use Illuminate\Http\Request;

class CheckpointController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Checkpoint.checkpoint', ['checkpoints' => Checkpoint::all()]);
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
        // create a checkpoint and store it in the db
        $checkpoint = Checkpoint::create([
            'name' => $request->name,
            'invigilator' => $request->invigilator,
            'transit_id' => $request->transit_id,
            'box' => $request->box
        ]);

        return back()->with('success', $checkpoint->name.' checkpoint has been created.');
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
        //delete a checkpoint
        $checkpoint = Checkpoint::findOrFail((int)$id);

        $checkpoint->delete();

        return redirect()->back()->with('success', $checkpoint->name.' from been deleted');
    }
}
