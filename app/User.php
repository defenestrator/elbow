<?php

namespace Elbow;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\MustVerifyEmail as VerifyEmail;
use Spatie\Permission\Traits\HasRoles;

/**
 * Elbow\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $stripe_id
 * @property string|null $card_brand
 * @property string|null $card_last_four
 * @property string|null $trial_ends_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User role($roles)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereCardBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereCardLastFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\User whereCreatedAt($value)
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
    use Notifiable;
    use VerifyEmail;
    use HasRoles;

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
}
