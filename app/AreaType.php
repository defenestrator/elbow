<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\AreaType
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $user_id
 * @property string $name
 * @property string $description
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\AreaType whereUuid($value)
 * @mixin \Eloquent
 */
class AreaType extends Model
{
    protected $fillable = ['name', 'description'];
}
