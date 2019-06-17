<?php

namespace App\Policies;

use App\User;
use App\Order;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;
    
    public function accept(User $user, Order $order)
    {
        return optional($user)->isDriver() && $order->driver === null;
    }

    public function comment(User $user, Order $order)
    {
        return $order->driver_id === $user->id;
    }

    public function deliver(User $user, Order $order)
    {
        return $order->driver_id === $user->id && $order->delivered !== true;
    }
}
