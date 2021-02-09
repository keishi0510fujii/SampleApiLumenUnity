<?php


namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Infrastructures\Eloquent\GetUserAbilityRepository;


class Show extends Controller
{
    public function __invoke($id)
    {
        $repository = new GetUserAbilityRepository();
        $user_ability = $repository->handle(intval($id));
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
