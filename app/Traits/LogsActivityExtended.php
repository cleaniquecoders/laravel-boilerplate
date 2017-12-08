<?php

namespace App\Traits;

use Spatie\Activitylog\Traits\LogsActivity;

/**
 * LogsActivityExtended Trait
 */
trait LogsActivityExtended
{
    use LogsActivity;

    /**
     * Logging only the changed attributes
     */
    protected static $logOnlyDirty = true;

    public function getLogNameToUse(string $eventName = ''): string
    {
        return str_slug_fqcn($this);
    }
}
