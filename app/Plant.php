<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Plant
 *
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $uuid
 * @property int $strain_id
 * @property int $cycle_id
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereStrainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereCycleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereUuid($value)
 * @property int $strain_id
 * @property mixed|null $notes
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereStrainId($value)
 * @property mixed $id
 * @property mixed|null $breeder_id
 * @property mixed $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereBreederId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plant whereUserId($value)
 */
class Plant extends Model
{
    //
}
