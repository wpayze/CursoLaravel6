<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        "nombre" => $faker->word,
        "existencia" => $faker->numberBetween(1,100),
        "sucursal_id" => $faker->numberBetween(1,3)
    ];
});
