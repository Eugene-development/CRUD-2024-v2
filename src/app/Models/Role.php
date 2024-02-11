<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Role extends RootModel
{

    protected $table = 'role';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
