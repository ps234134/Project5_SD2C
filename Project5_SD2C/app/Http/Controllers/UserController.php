<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('users.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'email' => 'required',
        ]);

        $newUser = new User([
            'user' => $request->get('user'),
            'email' => $request->get('email'),
        ]);

        $newUser->save();

        return redirect()->route('user.index')->with('success', 'User added!');


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
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $user->user_error = $request->get('user');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted!');
    }
}
