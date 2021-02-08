<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show($id)
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
