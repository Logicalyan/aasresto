<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required|min:6|max:255'
        ]);
        $validated['password'] = Hash::make('password');

        User::create($validated);

        return redirect()->route('user.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->update($validated);

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = User::findOrFail($id);

        $menu->delete();

        return redirect()->back();
    }
}
