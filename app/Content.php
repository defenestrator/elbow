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
 */
class Content extends Model
{
    // use Sluggable; // Attach the Sluggable trait to the model

    // protected $attributes = ['title', 'user_id', 'body'];

	// public function sluggable() {
	// 	return [
	// 		'source' => 'title',
	// 	];
	// }
    
    // public function images()
    // {
    //     return $this->morphMany(Content::class, 'imageable');
    // }

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'content_comment');
    }
}

