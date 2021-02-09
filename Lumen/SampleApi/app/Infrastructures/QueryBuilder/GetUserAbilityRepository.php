<?php


namespace App\Infrastructures\QueryBuilder;


use App\Repositories\IGetUserAbilityRepository;
use App\User;
use App\UserAbility;
use Illuminate\Support\Facades\DB;

class GetUserAbilityRepository implements IGetUserAbilityRepository
{
    private const TABLE_NAME_USER = 'users';
    private const TABLE_NAME_ABILITY = 'user_abilities';

    public function handle($id)
    {
        // テスト用なので、最初にテーブルを空にする
        // auto_incrementも初期化したいので、truncateでテーブル内を空にしている
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(self::TABLE_NAME_USER)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $users = factory(User::class, 10)->create();

        $user = $users->where('id', '=', $id)->first();
        if(is_null($user)){
            return "No User";
        }

        $user_ability = factory(UserAbility::class)->create([
            'user_id' => $id
        ]);

        return DB::table(self::TABLE_NAME_ABILITY)->where('user_id', '=', $id)->first();

    }
}
