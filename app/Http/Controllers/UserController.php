<?php

namespace App\Http\Controllers;

// --importing the user model and the hash library--
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $request->validate([
            "name"=> "required",
            "email"=> "required|email|unique:users",
            "password"=> "required|min:6",
        ]);

        // initialize the user model
        $user = new user();
        $user -> name = $request->input("name");
        $user -> email = $request->input("email");
        $user -> password = Hash::make($request->input("password"));
        // to save the info into the database
        $user -> save();
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
        //
    }
}
