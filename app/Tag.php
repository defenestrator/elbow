<?php

namespace Elbow;

use Illuminate\Database\Eloquent\Model;

/**
 * Elbow\Tag
 *
 * @property int $id
 * @property string $tag
 * @property string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Content[] $contents
 * @property-read int|null $contents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Strain[] $strains
 * @property-read int|null $strains_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Tag whereTag($value)
 * @mixin \Eloquent
 * @property mixed $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Tag whereUuid($value)
 */
class Tag extends Model
{
    /**
     * Get all of the posts that are assigned this tag.
     */
    public function contents()
    {
        return $this->morphedByMany('Elbow\Content', 'taggable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function strains()
    {
        return $this->morphedByMany('Elbow\Strain', 'taggable');
    }
}
