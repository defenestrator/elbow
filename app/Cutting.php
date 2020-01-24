<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\Cutting
 *
 * @property string $uuid
 * @property int $strain_id
 * @property int|null $seed_company_id
 * @property int|null $user_id
 * @property string|null $description
 * @property int $price
 * @property int $inventory
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereInventory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereSeedCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereStrainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cutting whereUuid($value)
 * @mixin \Eloquent
 * @property mixed $id
 */
class Cutting extends Model
{
    //
}
