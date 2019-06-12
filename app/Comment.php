<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\Comment
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Comment query()
 * @mixin \Eloquent
 */
class Comment extends Model
{
    
    public function commentable()
    {
        return $this->morphTo();
    }
}
