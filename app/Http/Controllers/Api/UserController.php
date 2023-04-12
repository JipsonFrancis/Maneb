<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json([
            'users' => $users
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
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
    
        return response()->json([
            'message' => "User saved successfully!",
            'User' => $user
        ], 200);
    }
    

    /**
     * Display the specified resource.
     */
    public function show($user_id)
    {
        //
        $user = User::findOrFail($user_id);

        return response()->json([
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, $user_id)
    {
        $user = User::findOrFail($user_id);

        $user->update($request->all());
    
        return response()->json([
            'message' => "User updated successfully!",
            'User' => $user
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);

        $user->delete();
    
        return response()->json([
            'message' => "User deleted successfully!",
        ], 200);
    }
}
