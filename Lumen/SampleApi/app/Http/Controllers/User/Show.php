<?php


namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\User;
use App\UserAbility;


class Show extends Controller
{
    public function __invoke($id)
    {
        $users = factory(User::class, 10)->create();

        $user = $users->where('id', '=', $id)->first();
        if(is_null($user)){
            return "No User";
        }

        $user_ability = factory(UserAbility::class)->create([
            'user_id' => $id
        ]);

        return response()->json([
            'level' => $user_ability->level,
            'hp' => $user_ability->hp,
            'mp' => $user_ability->mp,
            'attack' => $user_ability->attack,
            'protect' => $user_ability->protect,
            'speed' => $user_ability->speed,
        ]);

    }
}
