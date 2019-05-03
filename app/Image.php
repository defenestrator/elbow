<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\Image
 *
 * @property int $id
 * @property string $large
 * @property string $thumbnail
 * @property string $stamp
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereLarge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image query()
 * @property string $small
 * @property string $thumb
 * @property string $imageable_type
 * @property int $imageable_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereSmall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Image whereThumb($value)
 */
class Image extends Model
{
    protected $fillable = ['thumbnail', 'large', 'stamp'];
}
