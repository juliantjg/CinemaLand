<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(\App\User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(\App\User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => '',
        ]);

        auth()->$user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}