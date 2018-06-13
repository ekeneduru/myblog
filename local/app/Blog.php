<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'description','photourl',
        'category_id','user_id','createdby_id','modifyby_id','IsPublished'
    ];
    public function Blogfiles()
    {
        return $this->hasMany('App\Blogfile');
    }

    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function Category()
    {
        return $this->belongsTo('App\Category');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
