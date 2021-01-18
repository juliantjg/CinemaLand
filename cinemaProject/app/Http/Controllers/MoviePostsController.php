<?php

namespace App\Http\Controllers;

use App\Menu;
use App\MoviePost;
use Illuminate\Http\Request;

class MoviePostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('admin')->except('index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'menu_id' => '1',
            'movie_name' => 'required',
            'price' => 'required',
            'url' => 'required',
            'image' => ['required', 'image'],
        ]);

        if (auth()->user()->role == "admin") {
            $cinema = Menu::find(1);

            dd(request('image')->store('uploads', 'public'));

            $cinema->MoviePosts()->create($data);
        }

        dd(request()->all());
    }
}