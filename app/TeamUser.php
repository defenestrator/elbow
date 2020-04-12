<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Elbow\TeamUser
 *
 * @property int $id
 * @property mixed $uuid
 * @property int $team_id
 * @property int $user_id
 * @property int $owner
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\TeamUser whereUuid($value)
 * @mixin \Eloquent
 */
class TeamUser extends Pivot
{
    public $timestamps = true;    
}


