<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoviePost extends Model
{
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}