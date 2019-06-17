<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isDriver()
    {
        return $this->type === 'driver';
    }

    public function orders()
    {
        return $this->isDriver()
            ? Order::whereNull('driver_id')->orWhere('driver_id', $this->id)
            : $this->hasMany(Order::class);
    }

}
