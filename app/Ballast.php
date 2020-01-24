<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Ballast
 *
 * @property string $uuid
 * @property string $model
 * @property int|null $user_id
 * @property int $watts
 * @property int|null $manufacturer_id
 * @property int $efficiency
 * @property mixed|null $specification
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereEfficiency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Ballast whereWatts($value)
 * @mixin \Eloquent
 * @property mixed $id
 */
class Ballast extends Model
{
    //
}
