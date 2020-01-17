<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Elbow\Traits\HasUuid;

/**
 * Elbow\Prototype
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype query()
 * @mixin \Eloquent
 */
class Prototype extends Model
{
    use HasUuid;
}
