<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Environment
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $user_id
 * @property int|null $sensor_id
 * @property int|null $temperature_c
 * @property int|null $c02_ppm
 * @property int|null $oxygen_ppm
 * @property int|null $relative_humidity
 * @property float|null $barometric_pressure
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereBarometricPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereC02Ppm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereOxygenPpm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereRelativeHumidity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereSensorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereTemperatureC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Environment whereUuid($value)
 * @mixin \Eloquent
 */
class Environment extends Model
{
    //
}
