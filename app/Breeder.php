<?php

namespace Elbow;

use Elbow\Prototype as Model;
use Laravel\Scout\Searchable;

/**
 * Elbow\Breeder
 *
 * @property integer $id
 * @property string $name
 * @property string $ucpc
 * @property string $description
 * @property string $image
 * @property string $url
 * @property string $cannabis_reports_link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Strain[] $strains
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereUcpc($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereCannabisReportsLink($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\Breeder whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Breeder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Breeder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Breeder query()
 * @property string|null $uuid
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Breeder whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Breeder whereUuid($value)
 * @property int|null $user_id
 * @property-read int|null $strains_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Breeder whereUserId($value)
 */
class Breeder extends Model
{
    use Searchable;

    public $asYouType = true;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->only(['id', 'name', 'uuid', 'image']);

        return $array;
    }

    /**
     * @var string
     */
    protected $table = 'breeders';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'uuid',
        'ucpc',
        'description',
        'cannabis_reports_link',
        'url',
        'image'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function strains()
    {
        return $this->hasMany(Strain::class);
    }
}
