<?php

namespace App\Http\Controllers\api_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ApiUserController extends Controller
{

    public function login(Request $request)
    {
        info(' Send Request: ' . $request);
    
        $credentials = $request->only('email', 'password');
        info('Request: ' . json_encode($credentials));

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            info('User: ' . $user);
            
            // Generate a new token for the authenticated user
            $token = $user->createToken('authToken')->plainTextToken;
    
            // Save the token in the database
            $user->remember_token = $token;
            $user->save();
    
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    public function register(Request $request)
{
    info('enters getUser function');
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:3',
    ]);
   

    $validatedData['password'] = bcrypt($request->password);
    
    $loggedUser = User::create($validatedData);
    
  
    $token = $loggedUser->createToken('remember_token')->plainTextToken;

    // Update user's token column with the generated token
    $loggedUser->remember_token = $token;
    $loggedUser->save();

    return response()->json(['token' => $token], 201);
}

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

    public function logout(Request $request)
{
    // Get the access token from the request header
    $accessToken = $request->header('Authorization');

    // Remove the "Bearer " prefix from the access token
    $accessToken = str_replace('Bearer ', '', $accessToken);

    // Retrieve the logged-in user based on the access token
    $user = User::where('token', $accessToken)->first();

    if (!$user) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $user->remember_token = null;
    $user->save();

    return response()->json(['message' => 'Logged out successfully']);
}
}


