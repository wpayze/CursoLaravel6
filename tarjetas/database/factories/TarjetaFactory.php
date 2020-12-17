<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tarjeta;
use App\Persona;
use Faker\Generator as Faker;

$factory->define(Tarjeta::class, function (Faker $faker) {
    return [
        "persona_id" => factory(Persona::class)->create(),
        "tipo" => $faker->creditCardType,
        "numero" => $faker->creditCardNumber,
        "expiracion" => $faker->creditCardExpirationDateString
    ];
});
