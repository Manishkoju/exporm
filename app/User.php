<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email', 
        'password',
        'salutation',
        'country',
        'company_id',
        'confirmed_at',
        'role_id',
        'status',
        'last_active_time',
        'image',
        'visit',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
     return $this->belongsToMany('App\Models\Role','roles','id');
    }

    public function hasAnyROle($roles)
    {
        print_r($roles);
        die();
    }
}

