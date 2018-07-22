<?php

use Illuminate\Support\Facades\Cache;

/*
 * generate sequence
 * @return sequence based on length supplied
 */
if (! function_exists('generate_sequence')) {
    function generate_sequence($input = 1)
    {
        return str_pad($input, config('document.sequence_length'), '0', STR_PAD_LEFT);
    }
}

/*
 * Get Abbreviation fo the given text
 */
if (! function_exists('abbrv')) {
    function abbrv($value, $unique_characters = true)
    {
        $removeNonAlphanumeric = preg_replace('/[^A-Za-z0-9 ]/', '', $value);
        $removeVowels          = str_replace(
            ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', ' '],
            '',
            $removeNonAlphanumeric);

        $uppercase = strtoupper($removeVowels);

        if ($unique_characters) {
            $split             = str_split($uppercase);
            $unique_characters = [];
            foreach ($split as $character) {
                if (! in_array($character, $unique_characters)) {
                    $unique_characters[] = $character;
                }
            }

            return implode('', $unique_characters);
        }

        return $uppercase;
    }
}

/*
 * Get Reference
 *
 * @todo Use Cache to Speed up the Query
 */
if (! function_exists('generate_reference')) {
    function generate_reference($prefix = 'DOCUMENT REFERENCE', $count = false)
    {
        $explode = explode(' ', $prefix);
        foreach ($explode as $word) {
            $reference_number[] = abbrv($word);
        }

        $reference_number[] = \Carbon\Carbon::now()->format('Y/m/d');

        if (false != $count) {
            $reference_number[] = generate_sequence($count);
        } else {
            $reference_number[] = strtoupper(\Illuminate\Support\Str::random(config('document.sequence_length')));
        }

        return implode('/', $reference_number);
    }
}

/*
 * Hashids Helper
 */
if (! function_exists('hashids')) {
    function hashids(?string $salt = null, ?int $length = null, ?string $alphabet = null): \App\Services\Hashids
    {
        return \App\Services\Hashids::make($salt, $length, $alphabet);
    }
}

/*
 * Get Slug Name for Fully Qualified Class Name (FQCN)
 */
if (! function_exists('str_slug_fqcn')) {
    function str_slug_fqcn($object)
    {
        return strtolower(str_replace('\\', '-', get_class($object)));
    }
}

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
 * user() helper
 */
if (! function_exists('user')) {
    function user()
    {
        foreach (config('auth.guards') as $key => $value) {
            if (Auth::guard($key)->check()) {
                return Auth::guard($key)->user();
            }
        }

        return null;
    }
}

/*
 * roles() helper
 */
if (! function_exists('roles')) {
    function roles()
    {
        return config('permission.models.role')::get();
    }
}

/*
 * permissions() helper
 */
if (! function_exists('permissions')) {
    function permissions()
    {
        return config('permission.models.permission')::get();
    }
}

/*
 * Minify given HTML Content
 */
if (! function_exists('minify')) {
    function minify($value)
    {
        $replace = [
            '/<!--[^\[](.*?)[^\]]-->/s' => '',
            "/<\?php/"                  => '<?php ',
            "/\n([\S])/"                => '$1',
            "/\r/"                      => '',
            "/\n/"                      => '',
            "/\t/"                      => '',
            '/ +/'                      => ' ',
        ];

        if (false !== strpos($value, '<pre>')) {
            $replace = [
                '/<!--[^\[](.*?)[^\]]-->/s' => '',
                "/<\?php/"                  => '<?php ',
                "/\r/"                      => '',
                "/>\n</"                    => '><',
                "/>\s+\n</"                 => '><',
                "/>\n\s+</"                 => '><',
            ];
        }

        return preg_replace(array_keys($replace), array_values($replace), $value);
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
 * Get Role by Name
 */
if (! function_exists('role')) {
    function role($name)
    {
        return Cache::remember('role_' . $name, 10, function () use ($name) {
            return config('permission.models.role')::findByName($name);
        });
    }
}

/*
 * Get Permission by Name
 */
if (! function_exists('permission')) {
    function permission($name)
    {
        return Cache::remember('permission_' . $name, 10, function () use ($name) {
            return config('permission.models.permission')::findByName($name);
        });
    }
}
