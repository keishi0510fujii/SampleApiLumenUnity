<?php


namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;


class Show extends Controller
{
    public function __invoke($id)
    {
        return response()->json([
            "name" => "Robin",
            "level" => 99,
            "hp" => 999,
            "mp" => 99,
            "attack_base" => 255,
            "protect_base" => 255,
            "speed" => 255
        ]);
    }
}
