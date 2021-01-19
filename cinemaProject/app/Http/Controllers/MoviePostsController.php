<?php

namespace App\Http\Controllers;

use App\Menu;
use App\MoviePost;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

        $cinema = Menu::find(1);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1500);
        $image->save();

        $cinema->MoviePosts()->create([
            'menu_id' => '1',
            'movie_name' => $data['movie_name'],
            'price' => $data['price'],
            'url' => $data['url'],
            'image' => $imagePath
        ]);


        return redirect('/home/');
    }

    public function show(\App\MoviePost $moviePost)
    {
        return view('posts.show', compact('moviePost'));
    }
}