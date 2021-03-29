<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Insurance;
use App\Children;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    
    $insurance = Insurance::all()->pluck('id')->toArray();

    return [
        'lname' => $faker->lastname,
        'fname' => $faker->name,
        'job' => $faker->jobTitle,
        'insurance_id' => $faker->randomElement($insurance)
    ];
});
