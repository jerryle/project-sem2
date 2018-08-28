<?php

namespace Truyen24h;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $table = "story_chapters";

    public function story()
    {
        return $this->belongsTo('Truyen24h\Story');
    }
}
