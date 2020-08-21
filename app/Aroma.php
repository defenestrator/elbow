<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

class Aroma extends Model
{
    public function strains()
    {
        return $this->morphedByMany('App\Strain', 'smellable');
    }
}
