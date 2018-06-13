<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    public function Blogs()
    {
        return $this->hasMany('App\Blog');
    }

    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function Replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function IsUserInRole($role)
    {
        $role= $this->roles()->where('name',$role)->first();
        if($role!=null)
        {
            return true;
        }
        
       return false;
        
    }
}
