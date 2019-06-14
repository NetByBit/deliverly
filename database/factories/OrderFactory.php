<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'image' => 'https://dummyimage.com/400x255/ff7f7f/333333.png&text=Temporary Image',
        'description' => $faker->text(600),
        'from' => $faker->address,
        'to' => $faker->address,
        'from_city' => $faker->state,
        'to_city' => $faker->state,
        'weight' => $faker->numberBetween(100, 20000),
    ];
});
