<?php

namespace Elbow;

use Elbow\Traits\Sluggable;
use Elbow\Prototype as Model;

/*
 */
/**
 * Elbow\Content
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content query()
 * @mixin \Eloquent
 * @property string $uuid
 * @property int $author_id
 * @property string $slug
 * @property string $contentable_type
 * @property int $contentable_id
 * @property string $title
 * @property string $body
 * @property string|null $fields
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Content[] $images
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereContentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereContentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereUuid($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Content[] $comments
 * @property string|null $commentable_type
 * @property int|null $commentable_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Elbow\Content whereCommentableType($value)
 * @property mixed $id
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Image[] $edits
 * @property-read int|null $edits_count
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Elbow\Tag[] $tags
 * @property-read int|null $tags_count
 */
class Content extends Model
{
    use Sluggable; // Attach the Sluggable trait to the model
    
    protected function sluggable()
    {
        return 'title';
    }    

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany('Elbow\Comment', 'commentable');
    }

    public function edits()
    {
        return $this->morphMany('Elbow\Edit', 'editable');
    }

    public function images()
    {
        return $this->morphMany('Elbow\Image', 'imageable');
    }

    /**
     * Get all of the tags for the content.
     */
    public function tags()
    {
        return $this->morphToMany('Elbow\Tag', 'taggable');
    }
}

