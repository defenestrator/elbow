<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\HvacAppliance
 *
 * @property string $uuid
 * @property int|null $manufacturer_id
 * @property int|null $user_id
 * @property int $btus
 * @property int $watts
 * @property int $cfm
 * @property string $name
 * @property string $appliance_type
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereApplianceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereBtus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereCfm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\HvacAppliance whereWatts($value)
 * @mixin \Eloquent
 */
class HvacAppliance extends Model
{
    //
}
