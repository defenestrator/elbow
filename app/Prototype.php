<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;
use Dyrynda\Database\Casts\EfficientUuid;
use Dyrynda\Database\Support\GeneratesUuid;

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
    use GeneratesUuid;   
    
    protected $casts = [
        'uuid' => EfficientUuid::class,
    ];
}
