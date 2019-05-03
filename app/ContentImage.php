<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Elbow\ContentImage
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage query()
 * @mixin \Eloquent
 */
class ContentImage extends Pivot
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
    */
    public $incrementing = true;
}
