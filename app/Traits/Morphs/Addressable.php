<?php

namespace OSI\Traits\Morphs;

/**
 * Addressable Trait
 */
trait Addressable
{
    /**
     * Get all of the addresses
     */
    public function addresses()
    {
        return $this->morphMany(\OSI\Models\Address::class, 'addressable');
    }
}
