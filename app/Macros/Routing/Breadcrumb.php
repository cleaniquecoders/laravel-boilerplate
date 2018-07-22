<?php

namespace App\Macros\Routing;

use DaveJamesMiller\Breadcrumbs\BreadcrumbsManager;

class Breadcrumb
{
    public static function registerMacros()
    {
        if (! BreadcrumbsManager::hasMacro('crud')) {
            BreadcrumbsManager::macro('crud', function (string $module, string $parent, string $prefix) {
                // Module Name
                BreadcrumbsManager::register($prefix . '.index', function ($breadcrumbs) use ($module, $parent, $prefix) {
                    $breadcrumbs->parent($parent);
                    $breadcrumbs->push($module, route($prefix . '.index'));
                });

                // Module Name > Add
                BreadcrumbsManager::register($prefix . '.create', function ($breadcrumbs) use ($prefix) {
                    $breadcrumbs->parent($prefix . '.index');
                    $breadcrumbs->push(__('Add'), route($prefix . '.create'));
                });

                // Module Name > Details
                BreadcrumbsManager::register($prefix . '.show', function ($breadcrumbs, $id) use ($prefix) {
                    $breadcrumbs->parent($prefix . '.index');
                    $breadcrumbs->push(__('Details'), route($prefix . '.show', $id));
                });

                // Module Name > Edit
                BreadcrumbsManager::register($prefix . '.edit', function ($breadcrumbs, $id) use ($prefix) {
                    $breadcrumbs->parent($prefix . '.show', $id);
                    $breadcrumbs->push(__('Update'), route($prefix . '.edit', $id));
                });
            });
        }
    }
}
