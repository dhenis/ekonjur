<?php

use Faker\Generator as Faker;

$factory->define(App\Opening::class, function (Faker $faker) {
    return [
        'heading' => $faker->sentence(10),
        'content' => $faker->paragraph(30),
        //
    ];
});
