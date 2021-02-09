<?php


namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Infrastructures\Eloquent\GetUserAbilityRepository;
use App\Repositories\IGetUserAbilityRepository;


class Show extends Controller
{
    private $repository;
    public function __construct(IGetUserAbilityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($id)
    {
        $user_ability = $this->repository->handle(intval($id));
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
