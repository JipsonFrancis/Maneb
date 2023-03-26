<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Truck.truck', ['trucks' => Truck::all()]);
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
        // create a truck and store it in the db
        $truck = Truck::create([
            'licence' => $request->licence,
        ]);

        return back()->with('success', $truck->name.' truck has been created.');
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
        //delete a truck
        $truck = Truck::findOrFail((int)$id);

        $truck->delete();

        return redirect()->back()->with('success', $truck->name.' from been deleted');
    }
}
