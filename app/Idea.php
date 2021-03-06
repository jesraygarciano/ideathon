<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function favorites()
    {
        return $this->belongsToMany('App\Favorite')->withTimestamps();
    }
}
