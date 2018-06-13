<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogfile extends Model
{
    public function Blog()
    {
        return $this->belongsTo('App\Blog');
    }

    public function BlogfileType()
    {
        return $this->BelongsTo('App\BlogfileType');
    }
}
