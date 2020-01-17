<?php

namespace Elbow;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasPermissions;
use Elbow\Traits\HasUuid;

/**
 * Elbow\User
*/
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasPermissions, HasUuid;
    
    protected $guard_name = 'web';
    
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

    public function contents()
    {
        return $this->morphMany(User::class, 'contentable');
    }
}
