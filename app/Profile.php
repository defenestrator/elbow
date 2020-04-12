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
 * @property mixed $id
 * @property mixed $user_id
 * @property string $avatar
 * @property string $facebook
 * @property string $instagram
 * @property string $youtube
 * @property string $whatsapp
 * @property string $snapchat
 * @property string $cashtag
 * @property string $user_title
 * @property string|null $bio
 * @property int $public
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereCashtag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereSnapchat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereUserTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereWhatsapp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereYoutube($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Profile whereUuid($value)
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

