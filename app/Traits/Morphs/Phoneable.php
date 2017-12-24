<?php

namespace OSI\Traits\Morphs;

/**
 * Phoneable Trait
 */
trait Phoneable
{
    /**
     * Get all of the phones.
     */
    public function phones()
    {
        return $this->morphMany(\OSI\Models\Phone::class, 'phoneable');
    }
}
