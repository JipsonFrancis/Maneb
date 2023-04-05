<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('User.users', ['users' => ModelsUser::all()]);
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
        //
                // create a box and store it in the db
                $user = ModelsUser::create([
                    'name' => $request->name,
                    'role' => $request->role,
                    'email' => $request->email
                ]);
        
                return back()->with('success', $user->name.' user has been created.');
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
        dd("need to create a page to edit the variables or javascript which is the best way my guy");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
                //delete a box
                $user = ModelsUser::findOrFail((int)$id);

                $user->delete();
        
                return redirect()->back()->with('success', $user->name.' has been deleted');
    }
}
