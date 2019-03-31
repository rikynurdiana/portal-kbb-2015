<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1',
        ]);

        DB::table('role_user')->insert([
            'role_id' => '2',
            'user_id' => '2',
        ]);

        DB::table('role_user')->insert([
            'role_id' => '3',
            'user_id' => '3',
        ]);

        DB::table('role_user')->insert([
            'role_id' => '3',
            'user_id' => '4',
        ]);

        DB::table('role_user')->insert([
            'role_id' => '3',
            'user_id' => '5',
        ]);
    }
}
