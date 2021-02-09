<?php


namespace App\Infrastructures\Eloquent;


use App\Infrastructures\CreateTestData\CreateTestUserData;
use App\Repositories\IGetUserAbilityRepository;
use App\UserAbility;

class GetUserAbilityRepository implements IGetUserAbilityRepository
{
    public function handle($id)
    {
        // データベースのusersテーブル、user_abilitiesテーブルを空にする
        // 空にしたテーブルのauto_incrementは初期化する
        CreateTestUserData::run();

        $abilities = UserAbility::all();
        return $abilities->where('user_id', '=', $id)->first();
    }
}
