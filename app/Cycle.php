<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Cycle
 *
 * @property string $uuid
 * @property int $farm_id
 * @property string $name
 * @property string|null $description
 * @property int|null $medium_id
 * @property string $layout
 * @property string $method
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereFarmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereLayout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereMediumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cycle whereUuid($value)
 * @mixin \Eloquent
 * @property mixed $id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Stage[] $stages
 * @property-read int|null $stages_count
 */
class Cycle extends Model
{
    public function stages()
    {
        return $this->belongsToMany(Stage::class, 'cycle_stage')->using(CycleStage::class);
    }
}
