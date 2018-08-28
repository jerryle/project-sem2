<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{


    public function chapters()
    {
        return $this->hasMany('Truyen24h\Chapter');
    }

    public function genres()
    {
        return $this->belongsToMany('Truyen24h\Genre');
    }

    public function user()
    {
        return $this->belongsTo('Truyen24h\User');
    }
}
