<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use App\Insurance;
use App\Children;
use Faker\Generator as Faker;

$factory->define(Children::class, function (Faker $faker) {
   
    $insurance = Insurance::all()->pluck('id')->toArray();
    $employee = Employee::all()->pluck('id')->toArray();

    return [
        'insurance_id' => $faker->randomElement($insurance),
        'lname' => $faker->lastname,
        'fname' => $faker->name,
        'employee_id' => $faker->randomElement($employee)
    ];
});

