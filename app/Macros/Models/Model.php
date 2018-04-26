<?php

namespace App\Macros\Models;

use Illuminate\Database\Eloquent\Builder;

class Model
{
    public static function registerMacros()
    {
        Builder::macro('hashslug', function ($hashslug) {
            return $this->where('hashslug', $hashslug);
        });

        Builder::macro('findByHashSlug', function ($hashslug) {
            return $this->hashslug($hashslug)->firstOrFail();
        });
    }
}
