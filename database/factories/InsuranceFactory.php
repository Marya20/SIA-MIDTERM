<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Children;
use App\Employee;
use App\Insurance;
use Faker\Generator as Faker;

$factory->define(Insurance::class, function (Faker $faker) {

    $insurance = ['Philippine AXA Life Insurance. Corp.', 'Manufacturers Life Ins. Co. (Phils.), Inc.', 'BPI Philam Life Assurance Corp., Inc.','BDO Life Assce. Co., Inc. (Generali Pilipinas Life)','Pru Life Insurance Corp. of U.K.', 'The Insular Life Assurance Co Ltd','United Coconut Planters Life Assce. Corp.','SunLife Grepa Financial, Inc.'];

    return [
        'insurance' => $faker->randomElement($insurance),
    ];
});
