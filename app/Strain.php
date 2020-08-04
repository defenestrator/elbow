<?php

namespace Elbow;

use Elbow\Prototype as Model;
//use Laravel\Scout\Searchable;

/**
 * Elbow\Strain
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property string $lineage
 * @property string $genetics
 * @property string $breeder
 * @property string $description
 * @property string $url
 * @property string $qr
 * @property string $cannabis_reports_link
 * @property integer $flowering_time_min
 * @property integer $flowering_time_max
 * @property string $ucpc
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Plant[] $plants
 * @property-read \Elbow\Breeder $breeders
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereLineage($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereGenetics($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereBreeder($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereQr($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereCannabisReportsLink($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereFloweringTimeMin($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereFloweringTimeMax($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereUcpc($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Strain whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Strain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Strain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Strain query()
 * @property string|null $uuid
 * @property int|null $breeder_id
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Strain whereCannabisBreederId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Strain whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Strain whereUuid($value)
 * @property int|null $user_id
 * @property int|null $breeder_id
 * @property-read int|null $plants_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Strain whereBreederId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Strain whereUserId($value)
 */
class Strain extends Model
{
//    use Searchable;
    /**
     * @var string
     */
    protected $table = 'strains';

    /**
     * @var array
     */
    protected $fillable = [
        'cannabis_reports_link', 'name', 'lineage', 'genetics', 'description', 'breeder', 
        'breeder_id', 'uuid',
        'flowering_time_min', 'flowering_time_max', 'ucpc', 'image', 'url', 'qr', 'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function plants()
    {
        return $this->belongsToMany(Plant::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function breeder()
    {
        return $this->belongsTo(Breeder::class);
    }
}
