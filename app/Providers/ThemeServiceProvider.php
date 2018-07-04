<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\View\Compilers\Concerns\CompilesLayouts;

class ThemeServiceProvider extends ServiceProvider
{
    use CompilesLayouts;

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        session(['theme' => config('theme.default')]);
    }

    /**
     * Register services.
     */
    public function register()
    {
    }

    /**
     * Strip the parentheses from the given expression.
     *
     * @param string $expression
     *
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
