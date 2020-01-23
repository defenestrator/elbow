<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Raffle
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle query()
 * @mixin \Eloquent
 * @property int $cannabis_strain_id
 * @property int $ticket_limit
 * @property string $title
 * @property string $description
 * @property string $ends_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereCannabisStrainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereTicketLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereUpdatedAt($value)
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereDeletedAt($value)
 * @property string $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Raffle whereUuid($value)
 */
class Raffle extends Model
{
    protected $fillable = ['ticket_limit', 'title', 'description', 'cannabis_strain_id'];
}
