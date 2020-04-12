<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Stage
 *
 * @property mixed $id
 * @property mixed|null $area_id
 * @property string $name
 * @property string|null $description
 * @property int $photoperiod
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-write mixed $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage wherePhotoperiod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Stage whereUuid($value)
 */
class Stage extends Model
{
    //
}
