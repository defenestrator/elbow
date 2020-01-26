<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Comment
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment query()
 * @mixin \Eloquent
 * @property string $uuid
 * @property int $author_id
 * @property string $title
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereUuid($value)
 * @property mixed $id
 * @property mixed $user_id
 * @property mixed $commentable_id
 * @property string $commentable_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Content[] $contents
 * @property-read int|null $contents_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment whereUserId($value)
 */
class Comment extends Model
{
    protected $table = 'comments';
    
    public function commentable()
    {
        return $this->morphTo();
    }

}
