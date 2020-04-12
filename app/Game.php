<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Game
 *
 * @property int $id
 * @property \Dyrynda\Database\Casts\EfficientUuid $uuid
 * @property string $game_title
 * @property int|null $winner_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\GameMove[] $moves
 * @property-read int|null $moves_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game whereGameTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Game whereWinnerId($value)
 * @mixin \Eloquent
 */
class Game extends Prototype
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
