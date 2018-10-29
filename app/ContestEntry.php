<?php

namespace Elbow;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class ContestEntry extends Model
{
    use Notifiable;

    protected $fillable = ['email', 'giveaway_id', 'uuid', 'email_verified_at'];

}
