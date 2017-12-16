<?php

namespace OSI\Services;

use Hashids\Hashids as HashidsProvider;

/**
 * Hashids Service
 */
class Hashids
{
    /**
     * Hashids/Hashids
     * @var [type]
     */
    protected $hashids;

    public function __construct($salt, $length, $alphabet)
    {
        $this->hashids = new HashidsProvider($salt, $length, $alphabet);
    }

    /**
     * Create an instance of Hashids
     *
     * @return OSI\Services\Hashids
     */
    public static function make($salt, $length, $alphabet)
    {
        return new self($salt, $length, $alphabet);
    }

    /**
     * Encode
     * @param  int    $value
     * @return string
     */
    public function encode(int $value): string
    {
        return $this->hashids->encode($value);
    }

    /**
     * Decode
     * @param  string
     * @return int|null
     */
    public function decode(string $value): int
    {
        $value = $this->hashids->decode($value);

        if (is_array($value)) {
            return $value[0];
        } else {
            return null;
        }
    }
}
