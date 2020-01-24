<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Reservoir
 *
 * @property string $uuid
 * @property int|null $user_id
 * @property int|null $manufacturer_id
 * @property string $name
 * @property mixed|null $specification
 * @property int $capacity
 * @property int $auto_dosing
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereAutoDosing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Reservoir whereUuid($value)
 * @mixin \Eloquent
 * @property mixed $id
 */
class Reservoir extends Model
{
    //
}
