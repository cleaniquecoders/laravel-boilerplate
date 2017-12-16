<?php

namespace OSI\Traits;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * HasSlugExtended Trait
 */
trait HasSlugExtended
{
    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom($this->slug_from)
            ->saveSlugsTo('slug');
    }
}
