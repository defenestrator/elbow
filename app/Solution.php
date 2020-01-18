<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Solution
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $user_id
 * @property int|null $sensor_id
 * @property float|null $ph
 * @property float|null $ec
 * @property int|null $tds
 * @property int|null $level
 * @property int|null $temperature_c
 * @property int|null $dissolved_oxygen
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereDissolvedOxygen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereEc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution wherePh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereSensorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereTds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereTemperatureC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Solution whereUuid($value)
 * @mixin \Eloquent
 */
class Solution extends Model
{
    //
}
