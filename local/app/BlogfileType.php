<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogfileType extends Model
{
    public function Blogfiles()
    {
        return $this->hasMany('App\Blogfile');
    }
}
