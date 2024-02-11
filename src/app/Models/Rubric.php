<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Rubric extends RootModel
{

    protected $table = 'rubric';

    public function category(): MorphMany
    {
        return $this->morphMany(Category::class, 'parentable');
    }

    public function text(): MorphMany
    {
        return $this->morphMany(Text::class, 'parentable');
    }

    public function seoTitle(): MorphOne
    {
        return $this->morphOne(SeoTitle::class, 'parentable');
    }

    public function seoDescription(): MorphOne
    {
        return $this->morphOne(SeoDescription::class, 'parentable');
    }



    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
