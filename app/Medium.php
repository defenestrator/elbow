<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Medium
 *
 * @property string $uuid
 * @property string $name
 * @property string|null $description
 * @property int|null $manufacturer_id
 * @property mixed|null $ingredients
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereIngredients($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Medium whereUuid($value)
 * @mixin \Eloquent
 * @property mixed $id
 */
class Medium extends Model
{
    protected $table = 'media';
}
