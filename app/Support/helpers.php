<?php

/*
 * generate sequence
 * @return sequence based on length supplied
 */
if (!function_exists('generate_sequence')) {
    function generate_sequence($input = 1)
    {
        return str_pad($input, config('document.sequence_length'), '0', STR_PAD_LEFT);
    }
}

/**
 * Get Abbreviation fo the given text
 */
if (!function_exists('abbrv')) {
    function abbrv($value)
    {
        $removeNonAlphanumeric = preg_replace("/[^A-Za-z0-9 ]/", '', $value);
        $removeVowels          = str_replace(
            ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', ' '],
            '',
            $removeNonAlphanumeric);
        $uppercase         = strtoupper($removeVowels);
        $split             = str_split($uppercase);
        $unique_characters = [];
        foreach ($split as $character) {
            if (!in_array($character, $unique_characters)) {
                $unique_characters[] = $character;
            }
        }
        return implode('', $unique_characters);
    }
}

/**
 * Get Reference
 *
 * @todo Use Cache to Speed up the Query
 */
if (!function_exists('generate_reference')) {
    function generate_reference($prefix = 'DOCUMENT REFERENCE', $count = false)
    {
        $explode = explode(' ', $prefix);
        foreach ($explode as $word) {
            $reference_number[] = abbrv($word);
        }

        $reference_number[] = \Carbon\Carbon::now()->format('Y/m/d');

        if ($count != false) {
            $reference_number[] = generate_sequence($count);
        } else {
            $reference_number[] = strtoupper(\Illuminate\Support\Str::random(config('document.sequence_length')));
        }

        return implode('/', $reference_number);
    }
}

/**
 * Hashids Helper
 */
if (!function_exists('hashids')) {
    function hashids($salt = null, $length = null, $alphabet = null)
    {
        $salt     = is_null($salt) ? config('hashids.salt') : config('hashids.salt') . $salt;
        $length   = is_null($length) ? config('hashids.length') : $length;
        $alphabet = is_null($alphabet) ? config('hashids.alphabet') : $alphabet;
        $salt     = \Illuminate\Support\Facades\Hash::make($salt);
        return \OSI\Services\Hashids::make($salt, $length, $alphabet);
    }
}

/**
 * Get Slug Name for Fully Qualified Class Name (FQCN)
 */
if (!function_exists('str_slug_fqcn')) {
    function str_slug_fqcn($value)
    {
        $fqcn = get_class($value);
        $fqcn = str_replace('\\', '-', $fqcn);
        return strtolower($fqcn);
    }
}

/**
 * Log Current logged in user activities
 */
if (!function_exists('userlog')) {
    function userlog($model, $message)
    {
        activity()
            ->performedOn($model)
            ->causedBy(auth()->user())
            ->log($message);
    }
}
