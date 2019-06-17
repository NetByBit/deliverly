<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];

    protected $casts = [
        'delivered' => 'boolean'
    ];

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

    public function getStatusAttribute()
    {
        if ($this->driver === null) {
            return 'waiting';
        } elseif ($this->delivered === true) {
            return 'delivered';
        } else {
            return 'delivering';
        }
    }

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}
