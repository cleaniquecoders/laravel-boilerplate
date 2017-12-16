<?php

namespace OSI\Traits;

use Spatie\MediaLibrary\Media;

/**
 * HasThumb Trait
 */
trait HasThumbnail
{
    public function registerMediaConversions(Media $media = null)
    {
        // use for navbar
        $this->addMediaConversion('thumbnail_navbar')
            ->width(22)
            ->height(22)
            ->performOnCollections('images', 'avatar');

        // use for newsfeed
        $this->addMediaConversion('thumbnail_newsfeed')
            ->width(38)
            ->height(38)
            ->performOnCollections('images', 'avatar');

        // use for sidebar menus, left or right
        $this->addMediaConversion('thumbnail_sidebar')
            ->width(38)
            ->height(38)
            ->performOnCollections('images', 'avatar');

        // Use for main menu
        $this->addMediaConversion('thumbnail_menu')
            ->width(20)
            ->height(20)
            ->performOnCollections('images', 'avatar');
    }
}
