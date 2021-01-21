<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $cinema = Menu::find(1);
        $movieposts = $cinema->MoviePosts()->paginate(8);
        return view('home', compact('movieposts', 'cinema'));
    }
}