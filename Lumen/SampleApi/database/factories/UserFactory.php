<?php

$factory->define(App\UserAbility::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
