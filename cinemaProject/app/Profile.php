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
        $imagePath = ($this->image) ? $this->image : 'profile/qxU0ILQRC44PlIlGzZ3Qu3nfLhALoMCTuSqDCRA0.jpg';
        return '/storage/' . $imagePath;
    }
}