<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
       	'name' =>$faker->randomElement(['php','java','mysql','noSql','big data', '.net']),
       	'description' => $faker->sentence(),
    ];
});
