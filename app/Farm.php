<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Farm
 *
 * @mixin \Eloquent
 */
class Farm extends Model
{
    public function user() 
    {
        return $this->belongsTo(Elbow\User::class);
    }
}
