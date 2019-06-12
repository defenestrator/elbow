<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\Seed
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $cannabis_strain_id
 * @property int $cannabis_seed_company_id
 * @property int $qty_per_pack
 * @property int $price
 * @property int $inventory
 * @property int $feminized
 * @property int $autoflower
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereAutoflower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereCannabisSeedCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereCannabisStrainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereFeminized($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereInventory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Seed whereQtyPerPack($value)
 */
class Seed extends Model
{
    //
}
