<?php

use Faker\Generator as Faker;
use App\Course;
use App\User;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
		//'course_id' => Course::all()->random()->id,
       	'user_id' => null,
       	'title' => $faker->jobTitle
    ];
});
