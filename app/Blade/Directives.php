<?php

namespace App\Blade;

use Illuminate\Support\Facades\Blade;

class Directives
{
    public static function make()
    {
        return new self();
    }

    public function register()
    {
        Blade::directive('icon', function ($icon) {
            $icon = str_replace('\'', '"', $icon);

            return "<i class={$icon}></i>";
        });
    }
}
