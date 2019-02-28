<?php

/*
 * Audit Trail
 */
if (! function_exists('audit')) {
    function audit($model, $message, $causedBy = null)
    {
        if (is_null($causedBy)) {
            activity()
                ->performedOn($model)
                ->causedBy(user())
                ->log($message);
        } else {
            activity()
                ->performedOn($model)
                ->causedBy($causedBy)
                ->log($message);
        }
    }
}

/*
 * Get Available Locales
 */
if (! function_exists('locales')) {
    function locales()
    {
        return collect(explode(',', config('app.locales')))->reject(function ($locale) {
            return ! file_exists(resource_path('lang/' . $locale));
        });
    }
}
