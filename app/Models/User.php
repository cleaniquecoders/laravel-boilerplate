<?php

namespace OSI\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OSI\Traits\HasMediaExtended;
use OSI\Traits\HasSlugExtended;
use OSI\Traits\HasThumbnail;
use OSI\Traits\LogsActivityExtended;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMediaConversions
{
    use HasMediaExtended, HasThumbnail, HasRoles, HasSlugExtended, LogsActivityExtended, Notifiable, SoftDeletes;

    /**
     * Create Slug From
     * @var array
     */
    protected $slug_from = ['name'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
