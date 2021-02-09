<?php


namespace App\Infrastructures\Eloquent;


use App\Repositories\IGetUserAbilityRepository;
use App\User;
use App\UserAbility;

class GetUserAbilityRepository implements IGetUserAbilityRepository
{
    public function handle($id)
    {
        // このクラスのhandleメソッドを呼び出す時はphp artisan migrate:freshが必要
        // auto_incrementを初期値に戻すコードがEloquentにはないので。。
        $users = factory(User::class, 10)->create();

        $user = $users->where('id', '=', $id)->first();
        if(is_null($user)){
            return "No User";
        }

        $user_ability = factory(UserAbility::class)->create([
            'user_id' => $id
        ]);
        return $user_ability;
    }
}
