<?php

namespace Elbow;

use Elbow\Prototype as Model;

class Profile extends Model
{
    protected $table = 'profiles';
    // protected $fillable = [
    //     'avatar',
    //     'instagram',
    //     'facebook',
    //     'snapchat',
    //     'whatsapp',
    //     'bio',
    //     'cashtag',
    //     'public',
    //     'user_title',
    //     'user_id'
    // ];

    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

    // public function image()
    // {
    //     return $this->morphOne('Heisen\Image', 'imageable');
    // }
}

