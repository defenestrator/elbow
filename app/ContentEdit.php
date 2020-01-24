<?php

namespace Elbow;

use Elbow\Prototype;

/**
 * Elbow\ContentEdit
 *
 * @property mixed $id
 * @property mixed $content_id
 * @property mixed $user_id
 * @property mixed $old_content
 * @property string $old_hash
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-write mixed $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereOldContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereOldHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContentEdit whereUserId($value)
 * @mixin \Eloquent
 */
class ContentEdit extends Prototype
{
    protected $table = 'content_edits';
}
