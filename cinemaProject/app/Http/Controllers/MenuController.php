<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $cinema = Menu::find(1);
        return view('home', compact('cinema'));
    }
}