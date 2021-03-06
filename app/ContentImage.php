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
 * @property int $content_id
 * @property int $image_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage whereImageId($value)
 * @property mixed $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentImage whereUuid($value)
 */
class ContentImage extends Pivot
{

}
