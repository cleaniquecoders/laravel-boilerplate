<?php

namespace OSI\Traits\Morphs;

/**
 * Emailable Trait
 */
trait Emailable
{
    /**
     * Get all of the emails.
     */
    public function emails()
    {
        return $this->morphMany(\CLNQCDRS\Models\Email::class, 'emailable');
    }
}
