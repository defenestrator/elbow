<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\Prototype
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype query()
 * @mixin \Eloquent
 * @property mixed $id
 * @property-write mixed $uuid
 */
abstract class Prototype extends Model
{
    

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
    */
    public $incrementing = true;
    
}
