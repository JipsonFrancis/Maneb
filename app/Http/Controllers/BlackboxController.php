<?php

namespace App\Http\Controllers;

use App\Models\Blackbox;
use App\Models\Checkpoint;
use App\Models\Transit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    // public function show(string $id)
    // {
    //     //
    //     $box = Blackbox::findOrFail($id);
    //     return view('Transit.transit', ['transits' => Transit::all(), 'Transit' => $box->transit]);
    // }

    public function show(string $id)
    {
        $box = Blackbox::findOrFail($id);
        //create collection
        $transit = $box->transit;

        // get the lasted checkpoint for this transit 
        $checkpoint_id = DB::table("checkpoints")->get()->where("transit_id", $transit->id)->sortBy("created_at")->last()->id;
        $checkpoint = Checkpoint::findOrFail($checkpoint_id);
        $packets = collect();

        foreach($transit->boxes as $box )
        {
            foreach($box->packs as $packet)
            {
                $packets->push([
                    'packet' => $packet,
                ]);
            }
        }

        $collection = collect([
            'transit_id' => $transit->id,
            'licence' => $transit->truck->licence,
            'Model' => "car x",
            'name' => $transit->name,
            'driver_id' => $transit->driver->id,
            'driver' =>  $transit->driver->name,
            'driver_email' => $transit->driver->email,
            'boxes' => $transit->boxes,
            'packet' => $packets,
            'center' => $checkpoint->center,
        ]);
        //dd($collection);
        return view('Transit.transit', ['transits' => Transit::all(), 'Transit' => $collection]);
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
        dd("need to create a page to edit the variables or javascript which is the best way my guy");
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

    public function qrGenerator(Request $req)
    {
        $box = Blackbox::first();
        $qr = 'http://127.0.0.1:8000/blackboxes/'.$box->id;
        return $qr;
    }
}
