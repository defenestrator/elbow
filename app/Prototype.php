<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

/**
 * Elbow\Prototype
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Prototype query()
 * @mixin \Eloquent
 */
class Prototype extends Model
{
    protected $fillable = ['uuid'];

    public static function uuid()
    {
        return Uuid::uuid4();
    }

    public static function create(array $attributes = [])
    {
        $attributes += ['uuid' => self::uuid()];
        $model = static::query()->create($attributes);
        return $model;
    }
}
