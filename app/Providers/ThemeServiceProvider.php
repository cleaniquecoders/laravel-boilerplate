<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\Concerns\CompilesLayouts;
use Illuminate\Support\Str;

class ThemeServiceProvider extends ServiceProvider
{
    use CompilesLayouts;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        session(['theme' => config('theme.default')]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Strip the parentheses from the given expression.
     *
     * @param  string  $expression
     * @return string
     */
    public function stripParentheses($expression)
    {
        if (Str::startsWith($expression, '(')) {
            $expression = substr($expression, 1, -1);
        }

        return $expression;
    }
}
