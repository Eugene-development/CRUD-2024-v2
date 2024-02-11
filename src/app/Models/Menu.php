<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Menu extends RootModel
{

    protected $table = 'menu';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
