<?php

namespace App\Http\Controllers\api_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    public function show($id)
{
    $user = User::findOrFail($id);

    return response()->json([
        'name' => $user->name,
        'email' => $user->email,
    ]);
}

  public function indexAchievements($id)
    { 
         // Extract the access token from the Authorization header
        $authorizationHeader = $request->header('Authorization');
        $accessToken = str_replace('Bearer ', '', $authorizationHeader);
    
 
        $user = User::where('token', $accessToken)->first();
        $user = User::findOrFail($id);

        $achievements = $user->achievements;

        return response()->json([
            'user' => $user,
            'achievements' => $achievements,
        ]);
    }
}


