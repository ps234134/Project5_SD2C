<?php

namespace App\Http\Controllers\api_controllers;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievement = Achievement::all();
        return response()->json($achievement);
    }


    public function store(Request $request)
    {
        info('enter store');
        info($request);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'starttime' => 'required|string',
            'endtime' => 'required|string',
            'amount' => 'required|string',
            'user_id' => 'required|string',

        ]);

        $achievement = Achievement::create($validatedData);
        return response()->json($achievement, 201);
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $achievement = Achievement::findOrFail($id);
        $achievement->update($validatedData);
        return response()->json($achievement);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();
        return response()->json(null, 204);
    }



    public function searchAchievement($name)
    {
    //    info('Search Term: ' . $name);

    //    $trimmedName = trim($name);

        // Perform  query based on the trimmed search term
        $query = Achievement::where('name'/*, $trimmedName*/)
            ->select('name');

        $achievement = $query->get();

    //    info('Fetched achievements:', $achievement->toArray());

        return response()->json($achievement);
    }
}
