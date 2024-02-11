<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Resource extends RootModel
{

    protected $table = 'resource';

    public function position(): MorphMany
    {
        return $this->morphMany(Position::class, 'parentable');
    }

    public function seoQuery(): MorphMany
    {
        return $this->morphMany(SeoQuery::class, 'parentable');
    }
    // public function first_position(): MorphMany
    // {
    //     return $this->morphMany(Position::class, 'parentable');
    // }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
