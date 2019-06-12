<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

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
 */
class Team extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
