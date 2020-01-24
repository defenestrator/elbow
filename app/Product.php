<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\Product
 *
 * @property int $id
 * @property string $type
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    
}
