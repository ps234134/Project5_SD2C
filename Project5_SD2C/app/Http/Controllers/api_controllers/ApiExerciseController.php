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
        
        info('Request' . $request);
        // Determine the column based on the language
        $descriptionColumn = $language === 'dutch' ? 'description_nld' : 'description_eng';
    
    
        info("Language: $language, Description Column: $descriptionColumn");
    
        // Fetch the exercises with the selected language column
        $exercises = Exercise::select('name', $descriptionColumn, 'img')->get();
    

        info('Fetched exercises:', $exercises->toArray());
    
        return response()->json($exercises);
    }
    public function show(Request $request, $language, $id)
    {
        // Remove unused $request parameter
        info('Request: ' . json_encode($request->json()->all()));

        // Determine the appropriate description column based on the language
        $descriptionColumn = $language === 'dutch' ? 'description_nld' : 'description_eng';
        info("Language: $language, Description Column: $descriptionColumn");

        $exercise = Exercise::select('name', $descriptionColumn, 'img')->findOrFail($id);
        info('Fetched exercise:', $exercise->toArray());
        return response()->json($exercise);
    }

 // Searches for an exercise based on user input
 public function searchExercise($language, $name)
 {
     info('Language: ' . $language);
     info('Search Term: ' . $name);
 
     $descriptionColumn = $language === 'dutch' ? 'description_nld' : 'description_eng';
     info('Description Column: ' . $descriptionColumn);
 
     // Trim the search term to remove any  whitespace before and after the term
     //idk why but if I don't do this it will break! 
     //because there comes a /n after the term in the query!
     $trimmedName = trim($name);
 
     // Perform  query based on the trimmed search term
     $query = Exercise::where('name', 'like', '%' . $trimmedName . '%')
         ->select('name', $descriptionColumn, 'img');
 
     info('Generated SQL Query: ' . $query->toSql(), $query->getBindings());
 
     $exercises = $query->get();
 
     info('Fetched exercises:', $exercises->toArray());
 
     return response()->json($exercises);
 }
 
 
 
 

}






