<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Description extends RootModel
{

    protected $table = 'description';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
