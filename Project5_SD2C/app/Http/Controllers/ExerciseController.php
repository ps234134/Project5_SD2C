<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;


class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercise = Exercise::all();
        return view('exercises.index', ['exercise' => $exercise]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exercises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description_eng' => 'required',
            'description_nld' => 'required',
            'img' => 'required',
        ]);

        $newExercise = new Exercise([
            'name' => $request->get('name'),
            'description_eng' => $request->get('description_eng'),
            'description_nld' => $request->get('description_nld'),
            'img' => $request->get('img'),

        ]);

        $newExercise->save();

        return redirect()->route('exercise.index')->with('success', 'Exercise added!');


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
        $exercise = Exercise::find($id);
        return view('exercises.edit', ['exercise' => $exercise]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description_eng' => 'required',
            'description_nld' => 'required',
        ]);

        $exercise = Exercise::find($id);
        $exercise->name = $request->get('name');
        $exercise->description_eng = $request->get('description_eng');
        $exercise->description_nld = $request->get('description_nld');
        $exercise->save();

        return redirect()->route('exercise.index')->with('success', 'Exercise updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();

        return redirect()->route('exercise.index')->with('success', 'Exercise deleted!');
    }
}
