<?php

namespace OSI\Traits;

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

    /**
     * Get Log Name to Use
     * @param  string $eventName
     * @return string
     */
    public function getLogNameToUse(string $eventName = ''): string
    {
        return str_slug_fqcn($this);
    }

    /**
     * Set Standard Description
     * @param  string $eventName
     * @return string
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This " . strtolower(class_basename($this)) . " has been {$eventName}";
    }
}
