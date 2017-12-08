<?php

namespace App\Traits;

use Illuminate\Support\Str;
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
        return Str::slug(get_class($this), '_');
    }
}
