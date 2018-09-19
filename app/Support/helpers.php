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

/*
 * Check if current route is active navigation
 */
if (! function_exists('is_active_nav')) {
    function is_active_nav($route_names)
    {
        return str_contains(request()->route()->getName(), $route_names);
    }
}

collect(glob(__DIR__ . '/*.php'))
    ->each(function ($path) {
        if (basename($path) !== basename(__FILE__)) {
            require $path;
        }
    });
