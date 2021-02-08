<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/user', function () {
    return response()->json([
        "name" => "Robin",
        "level" => 99,
        "hp" => 999,
        "mp" => 99,
        "attack_base" => 255,
        "protect_base" => 255,
        "speed" => 255
    ]);
});
