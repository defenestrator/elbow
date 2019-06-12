<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Elbow\ContentEdit
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $content_id
 * @property int $user_id
 * @property string $old_content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereOldContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereUserId($value)
 */
class ContentEdit extends Pivot
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
    */
    public $incrementing = true;
}
