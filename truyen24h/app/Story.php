<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use Cviebrock\EloquentSluggable\Sluggable;

class Story extends Model
{

    use Viewable;
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function chapters()
    {
        return $this->hasMany('Truyen24h\Chapter');
    }

    public function genres()
    {
        return $this->belongsToMany('Truyen24h\Genre', 'story_genre');
    }

    public function users()
    {
        return $this->belongsToMany('Truyen24h\User');
    }

}
