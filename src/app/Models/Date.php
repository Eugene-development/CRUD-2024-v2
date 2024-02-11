<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Date extends RootModel
{

    protected $table = 'date';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
