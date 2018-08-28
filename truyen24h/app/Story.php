<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;

class Story extends Model
{

    use Viewable;


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
