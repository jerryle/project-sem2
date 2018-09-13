<?php

namespace Truyen24h;

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
        'name', 'email', 'password','username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function chapters()
    {
        return $this->hasMany('Truyen24h\Chapter');
    }

    public function uploadedStories()
    {
        return $this->hasMany('Truyen24h\Story');
    }
}
