<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Team
 *
 * @property int $id
 * @property string $uuid
 * @property int $owner_id
 * @property string $name
 * @property string $biography
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team whereBiography($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Team whereUuid($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\User[] $users
 * @property-read int|null $users_count
 */
class Team extends Model
{
    protected $table = 'teams';

    public function users()
    {
        return $this->belongsToMany('Elbow\User', 'team_user');
    }
}
