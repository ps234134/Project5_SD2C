<?php

namespace App\Http\Controllers\api_controllers;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class ApiAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Achievement::All();
    }


    public function store(Request $request)
    {
        //THIS IS NOT FINISHED YET NEED DB GET TOKEN FROM REQUEST HEADER
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            // Add any other validation rules as needed
        ]);

        // Create a new achievement
        $achievement = $this->create($validatedData);

        return response()->json($achievement, 201);
    }


    private function create(array $data)
    {
        Log::emergency('Prestatie aangemaakt');
        $achievement = Achievement::create($request->all());

        return response()->json([
            'message' => 'Prestatie succesvol aangemaakt',
            'achievement' => $achievement
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $achievement = Achievement::where('id', $id)->get();
        return response()->json($achievement);
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
        $achievement = Achievement::where('id', $id);
        $achievement->update($request->all());

        return response()->json([
            'message' => 'Prestatie succesvol geupdate',
            'achievement' => $achievement
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achievement = Achievement::where('id', $id);
        $achievement->delete();

        return response()->json([
            'message' => 'Prestatie verwijderd'
        ]);
    }
}

