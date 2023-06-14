<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api_controllers\ApiExerciseController;
use App\Http\Controllers\api_controllers\ApiAchievementController;
use App\Http\Controllers\api_controllers\ApiUserController;


//gets excersises
Route::get('exercises', [ApiExerciseController::class, 'index']);
// creates excersises
Route::post('exercises', [ApiExerciseController::class, 'store']);

// gets achievements
Route::post('achievements', [ApiAchievementController::class, 'store']);

// gets a specific user
Route::get('users/{user}', [ApiUserController::class, 'show']);
// gets achievement of specific user
Route::get('users/{user}/achievements', [ApiUserController::class, 'achievements']);
