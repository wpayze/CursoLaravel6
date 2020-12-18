<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        "nombre" => $faker->name(),
        "edad" => $faker->numberBetween(1, 80),
        "activo" => 0
    ];
});
