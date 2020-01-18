<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\ContactFormMessage
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email_address
 * @property string $message
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage whereEmailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage query()
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage whereDeletedAt($value)
 * @property string $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\ContactFormMessage whereUuid($value)
 */
class ContactFormMessage extends Model
{
    protected $fillable = [
        'name',
        'email_address',
        'message'
    ];

}
