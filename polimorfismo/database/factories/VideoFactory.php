<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        "title" => $faker->sentence,
        "body" => $faker->paragraph,
        "url" => "https://www.youtube.com/embed/AdBE2To8HLo"
    ];
});
