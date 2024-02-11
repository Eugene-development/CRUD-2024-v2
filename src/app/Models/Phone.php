<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Phone extends RootModel
{

    protected $table = 'phone';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
