<?php

namespace Elbow;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasPermissions;
use Elbow\Traits\HasUuid;
use Illuminate\Support\Str;

/**
 * Elbow\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $email_verified_at
 * @property string|null $stripe_id
 * @property string|null $card_brand
 * @property string|null $card_last_four
 * @property string|null $trial_ends_at
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Farm[] $farms
 * @property-read int|null $farms_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereCardBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereCardLastFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasPermissions, HasUuid;
    
    protected $guard_name = 'web';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
    */
    public $incrementing = false;

    /**
     * Sets Optimized Uuids
     *
     * @void
    */
    public function setIdAttribute($id)
    {
        $this->attributes['id'] = preg_replace('/-/', '', Str::orderedUuid());
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function farms()
    // {
    //     return $this->hasMany(Farm::class);
    // }
}
