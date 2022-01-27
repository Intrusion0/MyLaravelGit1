<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName(),
        'surname'=>$faker->lastName(),
        'assumption'=>$faker->date(),
        'cf'=>$faker->sentence(),
        'wage'=>$faker->numberBetween(200000, 500000),
        'rule'=>$faker->word()
    ];
});
