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
 * @property int $id
 * @property int $content_id
 * @property int $image_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage whereImageId($value)
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
