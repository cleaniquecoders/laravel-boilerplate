<?php

namespace App\Blade\Directives;

use Illuminate\Support\Facades\Blade;

class Icon
{
    public static function register()
    {
        Blade::directive('icon', function ($icon) {
            $icon = str_replace('\'', '"', $icon);

            return "<i class={$icon}></i>";
        });
    }
}
