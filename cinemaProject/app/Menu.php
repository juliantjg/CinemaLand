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
        $imagePath = ($this->cover) ? $this->cover : 'cover/rk2IJGqYkNIML3nNrzN58FlAOTpqh5o2oGaWeghR.png';
        return '/storage/' . $imagePath;
    }
}