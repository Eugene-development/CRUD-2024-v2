<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Property extends RootModel
{

    protected $table = 'property';

    //    protected $primaryKey = 'uuid';
    //
    //    public function getKeyType()
    //    {
    //        return 'string';
    //    }


    public function price(): MorphOne
    {
        return $this->morphOne(Price::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
