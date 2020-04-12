<?php

namespace Elbow;

use Elbow\Prototype;
use Elbow\Traits\Immutable;
/**
 * Elbow\Edit
 *
 * @property-write mixed $id
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit query()
 * @mixin \Eloquent
 * @property mixed $editable_id
 * @property string $editable_type
 * @property mixed $user_id
 * @property mixed $hash
 * @property mixed $content
 * @property string $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereEditableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereEditableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereOldContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereContent($value)
 * @property \Dyrynda\Database\Casts\EfficientUuid $uuid
 * @property string $state
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $editable
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Edit whereUuid($value)
 */
class Edit extends Prototype
{
    use Immutable;

    protected   $table      = 'edits';

    public      $timestamps = false;
    
    protected   $fillable   = ['editable_id', 'editable_type', 'state', 'user_id'];

    protected   $hidden     = ['id'];

    public function editable()
    {
        return $this->morphTo();
    }
    
}
