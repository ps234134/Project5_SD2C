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
<<<<<<< Updated upstream
=======
        return view('users.create');
>>>>>>> Stashed changes

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< Updated upstream
        //
    }

=======
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


>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        //
=======
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
>>>>>>> Stashed changes
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< Updated upstream
        //
=======
        $request->validate([
            'user' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $user->user_error = $request->get('user');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated!');

>>>>>>> Stashed changes
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< Updated upstream
        //
=======
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted!');
>>>>>>> Stashed changes
    }
}
