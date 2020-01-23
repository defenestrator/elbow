<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Elbow\Traits\HasUuid;

class CycleStage extends Pivot
{
    use HasUuid;
}
