<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'image' => 'https://dummyimage.com/400x255/ff7f7f/333333.png&text=Temporary Image',
        'type' => 'customer',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->state(App\User::class, 'driver', function ($faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));

    return [
        'type' => 'driver',
        'car_type' => $faker->vehicle,
        'max_weight' => $faker->numberBetween(5000, 20000),
        'car_number' => $faker->vehicleRegistration,
    ];
});
