<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\Cannabis
 *
 * @property int $id
 * @property mixed|null $user_id
 * @property string $name
 * @property string|null $description
 * @property mixed $product_id
 * @property mixed $strain_id
 * @property mixed $seed_company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereSeedCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereStrainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Cannabis whereUserId($value)
 * @mixin \Eloquent
 */
class Cannabis extends Model
{
    
}
