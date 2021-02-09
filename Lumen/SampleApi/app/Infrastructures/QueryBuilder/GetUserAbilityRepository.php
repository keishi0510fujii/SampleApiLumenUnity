<?php


namespace App\Infrastructures\QueryBuilder;


use App\Infrastructures\CreateTestData\CreateTestUserData;
use App\Repositories\IGetUserAbilityRepository;
use App\User;
use App\UserAbility;
use Illuminate\Support\Facades\DB;

class GetUserAbilityRepository implements IGetUserAbilityRepository
{
    private const TABLE_NAME = 'user_abilities';

    public function handle($id)
    {
        // データベースのusersテーブル、user_abilitiesテーブルを空にする
        // 空にしたテーブルのauto_incrementは初期化する
        CreateTestUserData::run();

        return DB::table(self::TABLE_NAME)->where('user_id', '=', $id)->first();

    }
}
