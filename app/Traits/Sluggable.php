<?php
namespace Elbow\Traits;

trait Sluggable
{
	public static function bootSluggable()
	{
		static::saving(function ($model) {
			$settings = $model->sluggable();
			$model->slug = $model->generateSlug($settings['source']);
		});
	}

	abstract public function sluggable(): array;

	public function generateSlug($string)
	{
		return strtolower(preg_replace(
			['/[^\w\s]+/', '/\s+/'],
			['', '-'],
			$string
		));
	}
}