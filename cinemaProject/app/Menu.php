<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function MoviePosts()
    {
        return $this->hasMany(MoviePost::class)->orderBy('created_at', 'DESC');
    }
}