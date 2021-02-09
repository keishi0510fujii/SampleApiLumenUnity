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


//$table->bigIncrements('id');
//$table->unsignedInteger('level')->default(1);
//$table->unsignedInteger('hp')->default(25);
//$table->unsignedInteger('mp')->default(0);
//$table->unsignedInteger('attack')->default(15);
//$table->unsignedInteger('protect')->default(15);
//$table->unsignedInteger('speed')->default(15);
//$table->unsignedBigInteger('user_id');
