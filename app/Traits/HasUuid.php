<?php
namespace Elbow\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            $model->id = preg_replace('/-/', '', Str::orderedUuid());
        });

        // Just a little extra protection against l33t hax and dumb accidents.
        static::saving(function ($model) {
            $model->id = $model->getOriginal('uuid');
        });
    }
}
