<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        "nombre" => $faker->name,
        "apellido" => $faker->lastName,
        "correo" => $faker->email,
        "telefono" => $faker->phoneNumber,
        "direccion" => $faker->address,
        "usuario" => $faker->userName,
        "empresa" => $faker->company
    ];
});
