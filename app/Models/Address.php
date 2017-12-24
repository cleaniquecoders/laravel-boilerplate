<?php

namespace OSI\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = ['id'];

    /**
     * Get all of the owning addressable models.
     */
    public function addressable()
    {
        return $this->morphTo();
    }

    /**
     * Get Country
     * @return \OSI\Models\Country
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
