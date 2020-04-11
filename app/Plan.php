<?php

namespace Elbow;

use Elbow\Prototype;


/**
 * Elbow\Plan
 *
 * @property mixed $id
 * @property string $name
 * @property string $stripe_plan
 * @property int $archived
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-write mixed $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan whereArchived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan whereStripePlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Plan whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Plan extends Prototype
{
    
}
