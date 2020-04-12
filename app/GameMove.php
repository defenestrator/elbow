<?php

namespace Elbow;

use Dyrynda\Database\Casts\EfficientUuid;
use Dyrynda\Database\Support\GeneratesUuid;
use Elbow\Traits\Immutable;
use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\GameMove
 *
 * @property int $id
 * @property \Dyrynda\Database\Casts\EfficientUuid $uuid
 * @property int $game_user_id
 * @property string $hash
 * @property string $state
 * @property string $created_at
 * @property-read \Elbow\Game $game
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove whereGameUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\GameMove whereUuid($value)
 * @mixin \Eloquent
 */
class GameMove extends Model
{
    use Immutable, GeneratesUuid; 
    
    public $timestamps = false;

    public function __construct()
    {
        static::$hashCheck = true;
    }
    
    protected $casts = [
        'uuid' => EfficientUuid::class,
    ];
    
    /**
     * getHashKey
     *
     * @return string
     */
    protected function getHashKey() : string
    {
        return 'hash';
    }

    /**
     * getContentKey
     *
     * @return string
     */
    protected function getContentKey() : string
    {
        return 'state';
    }

    
    public function game()
    {
        return $this->belongsTo('Elbow\Game');
    }
}
