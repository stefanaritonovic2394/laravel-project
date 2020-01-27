<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'company_id' => factory(\App\Company::class),
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'active' => $faker->randomDigitNotNull,
    ];
});
