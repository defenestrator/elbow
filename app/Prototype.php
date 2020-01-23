<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;
use Elbow\Traits\HasUuid;
use Illuminate\Support\Str;

/**
 * Elbow\Prototype
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype query()
 * @mixin \Eloquent
 * @property mixed $uuid
 */
class Prototype extends Model
{
    use HasUuid;
    
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
    */
    public $incrementing = false;

    /**
     * Sets Optimized Uuids
     *
     * @void
    */
    public function setUuidAttribute($uuid)
    {
        $this->attributes['uuid'] = preg_replace('/-/', '', Str::orderedUuid());
    }
    
}
