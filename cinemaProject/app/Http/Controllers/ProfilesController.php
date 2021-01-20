<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        //Authorize using the ProfilePolicy
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        //Authorize using the ProfilePolicy
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'description' => 'required',
            'image' => '',
        ]);



        //If request receives an image then cut the image using image intervention and save it 
        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
        }

        // dd(array_merge(
        //     $data,
        //     //Rewrite 'image' inside $data with $imagePath
        //     ['image' => $imagePath],
        // ));

        auth()->user()->profile->update(array_merge(
            $data,
            //Rewrite 'image' inside $data with $imagePath
            ['image' => $imagePath],
        ));



        return redirect("/profile/{$user->id}");
    }
}