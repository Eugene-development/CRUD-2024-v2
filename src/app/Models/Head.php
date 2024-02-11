<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Head extends RootModel
{

    protected $table = 'head';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
