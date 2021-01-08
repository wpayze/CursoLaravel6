<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    $categorias = ["Electronica", "Vivienda", "Limpieza", "Carros", "Comestibles"];

    return [
        "nombre" => $faker->word,
        "precio" => random_int(100, 10000),
        "categoria" => $categorias[random_int(0,4)],
        "activo" => random_int(0,1)
    ];
});
