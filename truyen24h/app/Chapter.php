<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Chapter extends Model
{
    //
    protected $table = "chapters";

    use Viewable;
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'number',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'fullname'
            ]
        ];
    }

    public function getFullnameAttribute() {
        return $this->story->title . ' chuong ' . $this->number;
    }

    public function getRouteKeyName()
    {
        return $this->slug;
    }

    public function user()
    {
        return $this->belongsTo('Truyen24h\User');
    }

    public function story()
    {
        return $this->belongsTo('Truyen24h\Story');
    }
}
