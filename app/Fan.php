<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Fan
 *
 * @property string $uuid
 * @property int|null $user_id
 * @property int $watts
 * @property int $cfm
 * @property int|null $manufacturer_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereCfm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Fan whereWatts($value)
 * @mixin \Eloquent
 */
class Fan extends Model
{
    //
}
