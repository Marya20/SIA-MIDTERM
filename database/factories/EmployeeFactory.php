<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Insurance;
use App\Children;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    
    $insurance = Insurance::all()->pluck('id')->toArray();
    $lname = ['Matarlo', 'Cosinero', 'Bagsoling'];
    $fname = ['Shawn', 'Samantha', 'Sofia'];
    $job = ['Police', 'Teacher', 'Nurse'];

    return [
        'lname' => $faker->randomElement($fname),
        'fname' => $faker->randomElement($lname),
        'job' => $faker->randomElement($job),
        'insurance_id' => $faker->randomElement($insurance)
    ];
});
