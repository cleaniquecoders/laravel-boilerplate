<?php

/*
 * Check if current route is active navigation
 */
if (! function_exists('is_active_nav')) {
    function is_active_nav($route_names)
    {
        return str_contains(request()->route()->getName(), $route_names);
    }
}
