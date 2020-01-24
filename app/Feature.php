<?php

namespace Elbow;

use Elbow\Prototype;

/**
 * Elbow\Feature
 *
 * @property mixed $id
 * @property string $name
 * @property string $description
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-write mixed $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Feature whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Feature extends Prototype
{
    //
}
