<?php

namespace OSI\Traits;

use OSI\Traits\Morphs\Addressable;
use OSI\Traits\Morphs\Emailable;
use OSI\Traits\Morphs\Phoneable;

/**
 * HasProfile Trait
 */
trait HasProfile
{
    use Addressable, Emailable, Phoneable;
}
