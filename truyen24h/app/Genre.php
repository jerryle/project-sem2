<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
// 
    public function stories()
    {
        return $this->belongsToMany('Truyen24h\Story');
    }
}
