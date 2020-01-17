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
 */
class Comment extends Model
{
    protected $table = 'comments';
    
    public function commentable()
    {
        return $this->morphTo();
    }
}
