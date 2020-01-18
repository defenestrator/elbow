<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Driver
 *
 * @property int $id
 * @property string $uuid
 * @property string $model
 * @property int|null $user_id
 * @property int|null $manufacturer_id
 * @property int $watts
 * @property int $volts_dc_min
 * @property int $volts_dc_max
 * @property int $efficiency
 * @property mixed|null $specification
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereEfficiency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereVoltsDcMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereVoltsDcMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Driver whereWatts($value)
 * @mixin \Eloquent
 */
class Driver extends Model
{
    //
}
