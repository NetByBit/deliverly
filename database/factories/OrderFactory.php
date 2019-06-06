<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $weight = $faker->numberBetween(100, 20000);
    return [
        'title' => $faker->catchPhrase,
        'image' => $faker->imageUrl(800, 600),
        'description' => $faker->text(600),
        'from' => $faker->address,
        'to' => $faker->address,
        'weight' => $weight,
        'price' => $weight * (20 / 1000) + 20,
    ];
});
