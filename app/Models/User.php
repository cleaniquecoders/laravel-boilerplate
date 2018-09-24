<?php

namespace App\Models;

use App\Traits\HasDatatable;
use App\Traits\HasMediaExtended;
use App\Traits\HasSlugExtended;
use App\Traits\LogsActivityExtended;
use CleaniqueCoders\Profile\Traits\HasProfile;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMedia
{
    use HasProfile, HasMediaExtended, HasApiTokens,
        HasRoles, HasSlugExtended,
        LogsActivityExtended, Notifiable, SoftDeletes,
        HasDatatable;

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

    /**
     * The attributes that show in datatable.
     *
     * @var array
     */
    protected $datatable = [
        'name', 'email', 'hashslug',
    ];

    /**
     * Get roles as string via method.
     *
     * @return string
     */
    public function rolesToString()
    {
        return title_case(implode(', ', $this->roles->pluck('name')->toArray()));
    }

    /**
     * Get roles as a string via accessor.
     *
     * @return string
     */
    public function getRolesToStringAttribute()
    {
        return $this->rolesToString();
    }

    public function scopeDetails($query)
    {
        return $query->with(['roles' => function ($query) {
            return $query->select('id', 'name');
        }]);
    }

    public function getIsDeveloperAttribute()
    {
        return $this->hasRole('developer');
    }

    public function getIsAdministratorAttribute()
    {
        return $this->hasRole('administrator');
    }

    public function getIsUserAttribute()
    {
        return $this->hasRole('user');
    }
}
