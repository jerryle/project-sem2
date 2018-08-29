<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
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

    public function owner()
    {
        return $this->belongsTo('Truyen24h\User');
    }

}
