<?php

$factory->define(App\UserAbility::class, function (Faker\Generator $faker) {
    return [
        'level' => $faker->numberBetween(1,99),
        'hp' => $faker->numberBetween(25,999),
        'mp' => $faker->numberBetween(0,999),
        'attack' => $faker->numberBetween(15,999),
        'protect' => $faker->numberBetween(15,999),
        'speed' => $faker->numberBetween(15,255),
    ];
});
