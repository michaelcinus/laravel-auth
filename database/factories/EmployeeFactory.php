<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        
        'firstname'     => $faker -> firstName(),
        'lastname'      => $faker -> lastName(),
        'date_of_birth' => $faker -> date(),
        'private_code'  => $faker -> isbn13(),

    ];
});
