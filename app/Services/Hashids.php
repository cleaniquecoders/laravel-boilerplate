<?php

namespace App\Services;

use Hashids\Hashids as HashidsProvider;

/**
 * Hashids Service.
 */
class Hashids
{
    /**
     * Hashids/Hashids.
     *
     * @var [type]
     */
    protected $hashids;

    public function __construct(string $salt, int $length, string $alphabet)
    {
        $this->hashids = new HashidsProvider($salt, $length, $alphabet);
    }

    /**
     * Create an instance of Hashids.
     *
     * @return static
     */
    public static function make(?string $salt, ?int $length, ?string $alphabet)
    {
        $salt     = is_null($salt) ? config('hashids.salt') : config('hashids.salt') . $salt;
        $length   = $length   ?? config('hashids.length');
        $alphabet = $alphabet ?? config('hashids.alphabet');
        $salt     = \Illuminate\Support\Facades\Hash::make($salt);

        return new self($salt, $length, $alphabet);
    }

    /**
     * Encode.
     *
     * @param int $value
     *
     * @return string
     */
    public function encode(int $value): string
    {
        return $this->hashids->encode($value);
    }

    /**
     * Decode.
     *
     * @param  string
     *
     * @return int|null
     */
    public function decode(string $value): ?int
    {
        $value = $this->hashids->decode($value);

        if (is_array($value) && sizeof($value) > 0) {
            return $value[0];
        } else {
            return null;
        }
    }
}
