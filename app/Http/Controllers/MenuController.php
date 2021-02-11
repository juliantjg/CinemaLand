<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('index');
    }

    public function index()
    {
        $cinema = Menu::find(1);
        $movieposts = $cinema->MoviePosts()->paginate(8);
        return view('home', compact('movieposts', 'cinema'));
    }

    public function edit(Menu $cinema)
    {
        return view('cover', compact('cinema'));
    }

    public function store()
    {
        $data = request()->validate([
            'cover' => 'required',
        ]);

        $imagePath = request('cover')->store('cover', 'public');

        $imageArray = ['cover' => $imagePath];


        // dd($imageArray);

        $cinema = Menu::find(1);
        $cinema->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        // dd($cinema->coverImage());

        return redirect('/home/')->with([
            'message_success' => "Cover updated"
        ]);
    }
}