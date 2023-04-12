<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlackboxRequest;
use App\Models\Blackbox;
use Illuminate\Http\Request;

class BlackboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $box = Blackbox::all();
        return response()->json([
            'box' => $box
        ]);
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
    public function store(StoreBlackboxRequest $request)
    {
        $box = Blackbox::create($request->all());
    
        return response()->json([
            'message' => "box saved successfully!",
            'box' => $box
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($blackbox)
    {
        //
        $box = Blackbox::findOrFail($blackbox);
        
        return response()->json([
            'box' => $box
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blackbox $blackbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBlackboxRequest $request, $box_id)
    {
        $box = Blackbox::findOrFail($box_id);
        
        $box->update($request->all());
    
        return response()->json([
            'message' => "box updated successfully!",
            'box' => $box
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($box_id)
    {
        $box = Blackbox::findOrFail($box_id);

        $box->delete();
    
        return response()->json([
            'message' => "Box deleted successfully!",
        ], 200);
    }
}
