<?php
namespace Elbow\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = preg_replace('/-/', '', Str::orderedUuid());
        });
    }
}
