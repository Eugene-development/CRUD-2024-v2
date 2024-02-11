<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;


class Position extends RootModel
{

    protected $table = 'position';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
