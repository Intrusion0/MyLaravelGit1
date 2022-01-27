<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Leader;
use Faker\Generator as Faker;

$factory->define(Leader::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName(),
        'surname'=>$faker->lastName(),
        'age'=>$faker->numberBetween(0, 120),
        'dateOfBirth'=>$faker->date(), 
        'cf'=>$faker->sentence()
    ];
});
