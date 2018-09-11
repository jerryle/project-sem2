<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Story extends Model
{

    use Viewable;
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'title',
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
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return $this->slug;
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

    public function scopeSearch($query, $s) {
        return $query->where('slug', 'like', '%'.$s.'%');
    }

    public function orderChapters($column = 'updated_at')
    {
        return $this->orderBy($column, 'desc');
    } 
}