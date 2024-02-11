<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Category extends RootModel
{

    protected $table = 'category';

    public function tag(): MorphMany
    {
        return $this->morphMany(Tag::class, 'parentable');
    }

    public function product(): MorphMany
    {
        return $this->morphMany(Product::class, 'parentable');
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

    // Test
    public function testcategory(): MorphMany
    {
        return $this->morphMany(self::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
