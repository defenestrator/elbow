<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\Raffle
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle query()
 * @mixin \Eloquent
 */
class Raffle extends Model
{
    protected $fillable = ['thumbnail', 'large', 'stamp'];
}
