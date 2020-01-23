<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Lamp
 *
 * @property string $uuid
 * @property int|null $manufacturer_id
 * @property int|null $user_id
 * @property string|null $model
 * @property string|null $type
 * @property int $watts
 * @property int $ppf
 * @property int $lumens
 * @property mixed|null $specification
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereLumens($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp wherePpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Lamp whereWatts($value)
 * @mixin \Eloquent
 */
class Lamp extends Model
{
    //
}
