<?php

namespace OSI\Traits;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * HasMediaExtended Trait
 */
trait HasMediaExtended
{
    use HasMediaTrait;

    /**
     * Get the last media item of a media collection.
     *
     * @param string $collectionName
     * @param array $filters
     *
     * @return Media|null
     */
    public function getLastMedia(string $collectionName = 'default', array $filters = [])
    {
        $media = $this->getMedia($collectionName, $filters);

        return $media->sortByDesc('created_at')->first();
    }

    /*
     * Get the url of the image for the given conversionName
     * for first media for the given collectionName.
     * If no profile is given, return the source's url.
     */
    public function getLastMediaUrl(string $collectionName = 'default', string $conversionName = ''): string
    {
        $media = $this->getLastMedia($collectionName);

        if (!$media) {
            return '';
        }

        return $media->getUrl($conversionName);
    }
}
