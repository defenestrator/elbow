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
 */
class SeedCompany extends Model
{
    /**
     * @var string
     */
    protected $table = 'cannabis_seed_companies';

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
        return $this->hasMany('Elbow\Strain');
    }
}
