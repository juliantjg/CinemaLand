<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function MoviePosts()
    {
        return $this->hasMany(MoviePost::class)->latest();
    }

    //Initial/default cover image
    public function coverImage()
    {
        $imagePath = ($this->cover) ? $this->image : 'profile/gy2M17L7jBRaxhnyBWbPrwC6uWbfuGoGAemwsnFQ.png';
        return '/storage/' . $imagePath;
    }
}