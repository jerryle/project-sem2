<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Genre extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function stories()
    {
        return $this->belongsToMany('Truyen24h\Story', 'story_genre', 'genre_id', 'story_id');
    }

    public function getRouteKeyName()
    {
        return $this->slug;
    }
}
