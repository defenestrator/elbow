<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Harvest
 *
 * @property int $id
 * @property string $uuid
 * @property string $date_of
 * @property int $cycle_id
 * @property int $grams
 * @property string|null $notes
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereCycleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereDateOf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereGrams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Harvest whereUuid($value)
 * @mixin \Eloquent
 */
class Harvest extends Model
{
    //
}
