<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'name', 
    ];

    public function Users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    // public function UserRoles()
    // {
    //     return $this->hasMany('App\UserRole');
    // }
}
