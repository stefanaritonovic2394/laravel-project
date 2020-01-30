<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'id' => Role::ROLES['customer']['id'],
        'name' => Role::ROLES['customer']['name'],
    ];
});
