<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function Comment()
    {
        return $this->belongsTo('App\Comment');
    }
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
