<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Giveaway
 *
 * @property string $uuid
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string|null $ends_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereUuid($value)
 * @mixin \Eloquent
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Giveaway whereDeletedAt($value)
 * @property mixed $id
 */
class Giveaway extends Model
{
    //
}
