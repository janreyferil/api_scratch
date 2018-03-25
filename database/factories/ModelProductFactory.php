<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->randomFloat(2, 10, 1000),
        'stock' => $faker->numberBetween(100, 10000),
        'discount' => $faker->numberBetween(2, 30)
    ];
});
