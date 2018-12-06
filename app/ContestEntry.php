<?php

namespace Elbow;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
/**
 * Elbow\ContestEntry
 *
 * @property int $id
 * @property string $uuid
 * @property int $giveaway_id
 * @property string|null $email
 * @property string|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry whereGiveawayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContestEntry whereUuid($value)
 * @mixin \Eloquent
 */
class ContestEntry extends Model
{
    use Notifiable;

    protected $fillable = ['email', 'giveaway_id', 'uuid', 'email_verified_at'];

}
