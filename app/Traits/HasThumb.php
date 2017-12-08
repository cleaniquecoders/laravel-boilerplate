<?php

namespace App\Traits;

use Spatie\MediaLibrary\Media;

/**
 * HasThumb Trait
 */
trait HasThumb
{
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(124)
            ->height(124)
            ->performOnCollections('images', 'avatar');
    }
}
