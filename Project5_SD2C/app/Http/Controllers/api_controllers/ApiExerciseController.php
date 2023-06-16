<?php
//To-do:
//- Check parameter passing language trough Flutter

namespace App\Http\Controllers\api_controllers;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ApiExerciseController extends Controller
{
    public function index(Request $request, $language)
    {
        // Determine the column based on the language
        $descriptionColumn = $language === 'dutch' ? 'description_nld' : 'description_eng';

        // Fetch the exercises with the selected language column
        $exercises = Exercise::select('name', $descriptionColumn, 'image')->get();

        return response()->json($exercises);
    }

    public function show($language, $id)
    {
        // Determine the appropriate description column based on the language
        $descriptionColumn = $language === 'dutch' ? 'description_nld' : 'description_eng';

        $exercise = Exercise::select('name', $descriptionColumn, 'image')->findOrFail($id);

        return response()->json($exercise);
    }


}






