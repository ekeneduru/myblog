<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Blogs()
    {
        return $this->hasMany('App\Blog');
    }
}
