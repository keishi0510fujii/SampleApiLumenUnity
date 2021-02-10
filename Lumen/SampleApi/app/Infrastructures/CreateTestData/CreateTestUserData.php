<?php

declare(strict_types=1);
namespace App\Infrastructures\CreateTestData;


use App\User;
use App\UserAbility;
use Illuminate\Support\Facades\DB;

class CreateTestUserData
{
    private const TABLE_NAME_USER = 'users';
    private const TABLE_NAME_ABILITY = 'user_abilities';

    public static function run()
    {
        // テスト用なので、最初にテーブルを空にする
        // auto_incrementも初期化したいので、truncateでテーブル内を空にしている
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(self::TABLE_NAME_USER)->truncate();
        DB::table(self::TABLE_NAME_ABILITY)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $users = factory(User::class, 10)->create();

        foreach($users as $user){
            factory(UserAbility::class)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
