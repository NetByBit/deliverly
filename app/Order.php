<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function setWeightAttribute($value)
    {
        $this->attributes['weight'] = $value;
        $this->attributes['cost'] = $value * (20 / 1000) + 20;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}
