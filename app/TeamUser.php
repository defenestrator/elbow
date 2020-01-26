<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TeamUser extends Pivot
{
    private $timestamps = true;
    public $incrementing = false;
    
}


