<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Profile
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile query()
 * @mixin \Eloquent
 * @property mixed $uuid
 */
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

