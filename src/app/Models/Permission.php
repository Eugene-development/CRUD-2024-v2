<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Permission extends RootModel
{

    protected $table = 'permission';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
