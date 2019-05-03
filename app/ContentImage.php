<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ContentImage extends Pivot
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
    */
    public $incrementing = true;
}
