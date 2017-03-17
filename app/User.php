<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use RoleCms\Aspect\Traits\AspectPermissionUserTrait;

class User extends Authenticatable
{

    use AspectPermissionUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role_id', 'email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(role::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class,'user_id');
    }
}
