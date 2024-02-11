<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class SeoTitle extends RootModel
{

    protected $table = 'seotitle';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
