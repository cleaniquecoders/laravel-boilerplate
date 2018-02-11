<?php

namespace App\Models;

use App\Traits\HasMediaExtended;
use App\Traits\HasSlugExtended;
use App\Traits\HasThumbnail;
use App\Traits\LogsActivityExtended;
use CleaniqueCoders\Profile\Traits\HasProfile;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMediaConversions
{
    use HasProfile, HasMediaExtended, HasThumbnail, HasRoles, HasSlugExtended, LogsActivityExtended, Notifiable, SoftDeletes;

    /**
     * Guarded Field.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Create Slug From.
     *
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
