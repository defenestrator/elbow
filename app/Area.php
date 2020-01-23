<?php

namespace Elbow;

use Elbow\Prototype as Model;
use Elbow\Traits\HasUuid;
/**
 * Elbow\Area
 *
 * @property string $uuid
 * @property int $farm_id
 * @property string $name
 * @property string|null $description
 * @property int|null $floorspace_cm2
 * @property int|null $growspace_cm2
 * @property int|null $area_type_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereAreaTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereFarmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereFloorspaceCm2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereGrowspaceCm2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Area whereUuid($value)
 * @mixin \Eloquent
 */
class Area extends Model
{
    use HasUuid;
}
