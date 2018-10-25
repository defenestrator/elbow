<?php

namespace Elbow;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\MustVerifyEmail as EmailVerification;
use Illuminate\Database\Eloquent\Model;

class ContestEntry extends Model implements MustVerifyEmail
{
    use EmailVerification;

    private $fillable = ['email', 'giveaway_id'];

}
