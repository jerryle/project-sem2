<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
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
                'source' => 'name'
            ]
        ];
    }

    public function stories()
    {
        return $this->belongsToMany('Truyen24h\Story');
    }
}
