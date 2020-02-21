<?php

namespace Elbow;

use Elbow\Prototype as Model;

class Game extends Elbow\Prototype
{
    
    protected $fillable = ['game_title', 'winner_id'];

    /**
     * users
     *
     * @return void
     */
    public function users()
    { 
        return $this->belongsToMany('Elbow\User')
        ->using('Elbow\GameUser') 
        ->withTimestamps();
    }
    
    /**
     * moves
     *
     * @return void
     */
    public function moves()
    {
        return $this->hasManyThrough('Elbow\GameMove', 'Elbow\GameUser');
    }
}
