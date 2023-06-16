<?php

namespace App\Http\Controllers\api_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiAchievementController extends Controller
{
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
        //THIS IS NOT FINISHED YET NEED DB
        return Achievement::create($data);
    }
}
