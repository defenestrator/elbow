<?php

namespace Elbow;

use Elbow\Prototype as Model;

/**
 * Elbow\SeedCompany
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
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereUcpc($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereCannabisReportsLink($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Elbow\SeedCompany whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\SeedCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\SeedCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\SeedCompany query()
 * @property string|null $uuid
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\SeedCompany whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\SeedCompany whereUuid($value)
 */
class SeedCompany extends Prototype
{
    /**
     * @var string
     */
    protected $table = 'seed_companies';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
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
