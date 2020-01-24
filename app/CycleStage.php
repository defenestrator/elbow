<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Elbow\Traits\HasUuid;

/**
 * Elbow\CycleStage
 *
 * @property mixed $id
 * @property mixed $cycle_id
 * @property mixed $stage_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\CycleStage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\CycleStage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\CycleStage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\CycleStage whereCycleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\CycleStage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\CycleStage whereStageId($value)
 * @mixin \Eloquent
 */
class CycleStage extends Pivot
{
    use HasUuid;
}
