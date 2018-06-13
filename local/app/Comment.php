<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Blog()
    {
        return $this->belongsTo('App\Blog');
    }

    public function Replies()
    {
        return $this->hasMany('App\Reply');
    }
    
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
