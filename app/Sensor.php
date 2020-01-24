<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Sensor
 *
 * @property string $uuid
 * @property int|null $user_id
 * @property int|null $manufacturer_id
 * @property string $name
 * @property int|null $sensor_type_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereSensorTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Sensor whereUuid($value)
 * @mixin \Eloquent
 * @property mixed $id
 */
class Sensor extends Model
{
    //
}
