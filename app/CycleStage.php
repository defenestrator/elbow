<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Relations\Pivot;


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
 * @property mixed $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\CycleStage whereUuid($value)
 */
class CycleStage extends Pivot
{
    
}
