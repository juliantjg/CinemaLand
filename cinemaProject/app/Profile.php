<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Initial/default profile image
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/gy2M17L7jBRaxhnyBWbPrwC6uWbfuGoGAemwsnFQ.png';
        return '/storage/' . $imagePath;
    }
}