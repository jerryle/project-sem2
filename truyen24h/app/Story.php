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
        return $this->hasMany('Truyen24h\Chapter')->orderBy('number','desc');
    }

    public function chaptersInverse()
    {
        return $this->hasMany('Truyen24h\Chapter')->orderBy('number','asc');
    }

    public function followUsers() {
        return $this->belongsToMany('Truyen24h\User', 'story_user', 'story_id', 'user_id');
    }

    public function genres()
    {
        return $this->belongsToMany('Truyen24h\Genre', 'story_genre', 'story_id', 'genre_id');
    }

    public function user()
    {
        return $this->belongsTo('Truyen24h\User');
    }

    public function scopeSearch($query, $s) {
        return $query->where('slug', 'like', '%'.$s.'%');
    }

    public function latest($column = 'updated_at')
    {
        return $this->orderBy($column, 'desc');
    }

    public function getCreatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i d/m');
    }

    public function getUpdatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i d/m');
    }
}