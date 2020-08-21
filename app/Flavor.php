<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    public function strains()
    {
        return $this->morphedByMany('App\Strain', 'tastable');
    }
}
