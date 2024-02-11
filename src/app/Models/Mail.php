<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Mail extends RootModel
{

    protected $table = 'mail';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
