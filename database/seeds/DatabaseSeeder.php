<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Order;
use App\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->states('driver')->create();
        factory(User::class, 50)->create();

        $users = User::where('type', 'customer')->get();
        $users->each(function($user) use($users) {
            factory(Order::class, rand(0, 30))->create(['user_id'=> $user->id, 'driver_id' => rand(1, 10)])
                ->each(function($order){
                    $order->statuses()->saveMany(factory(Status::class, rand(0, 10))->make());
                });
        });
    }
}
