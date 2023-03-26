<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use Illuminate\Http\Request;

class PacketController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Packet.packet', ['packets' => Packet::all()]);
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
        // create a packet and store it in the db
        $packet = Packet::create([
            'name' => $request->name,
            'exam_paper' => $request->exam_paper,
            'blackbox_id' => $request->blackbox_id,
            'QR' => $request->QR,
            'initial_location' => $request->initial_location,
            'destination' => $request->destination
        ]);

        return back()->with('success', $packet->name.' packet has been created.');
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
        //delete a packet
        $packet = Packet::findOrFail((int)$id);

        $packet->delete();

        return redirect()->back()->with('success', $packet->name.' from been deleted');
    }
}
