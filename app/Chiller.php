<?php

namespace Elbow;

use Elbow\Prototype as Model;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Elbow\Chiller
 *
 * @property string $uuid
 * @property string|null $model
 * @property int $capacity
 * @property int $btus
 * @property int $watts
 * @property int $gph
 * @property int|null $manufacturer_id
 * @property int|null $user_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereBtus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereGph($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Chiller whereWatts($value)
 * @mixin \Eloquent
 * @property mixed $id
 */
class Chiller extends Model
{
    //
}
