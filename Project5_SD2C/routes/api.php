<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api_controllers\ApiExerciseController;
use App\Http\Controllers\api_controllers\ApiAchievementController;
use App\Http\Controllers\api_controllers\ApiUserController;


// Route to get both Dutch and English exercises
//{language} is a parameter that will be passed trough the controller it can only be "Dutch" or "English"
Route::get('exercises/{language}', [ApiExerciseController::class, 'index']);
Route::get('exercises/{language}/{id}', [ApiExerciseController::class, 'show']);
Route::get('exercises/{language}/search/{name}', [ApiExerciseController::class, 'searchExercise']);






// validates and creates achievements
Route::post('achievements', [ApiAchievementController::class, 'store']);

// gets a specific user
Route::get('users/{id}', [ApiUserController::class, 'show']);
// gets achievement of specific user
Route::get('users/{id}/achievements', [ApiUserController::class, 'indexAchievements']);
