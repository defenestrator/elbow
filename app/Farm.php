<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Farm
 *
 * @mixin \Eloquent
 * @property mixed $id
 * @property mixed|null $user_id
 * @property string $name
 * @property string|null $description
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $postcode
 * @property string $total_area_m2
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-write mixed $uuid
 * @property-read \Elbow\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereTotalAreaM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Farm whereUuid($value)
 */
class Farm extends Model
{
    // public function user() 
    // {
    //     return $this->belongsTo(User::class);
    // }
}
