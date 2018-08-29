<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $table = "chapters";

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

    public function story()
    {
        return $this->belongsTo('Truyen24h\Story');
    }
}
