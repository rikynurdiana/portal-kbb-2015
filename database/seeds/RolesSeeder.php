<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'superadmin',
            'label' => 'The superadmin of the system',
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'label' => 'The admin of the apps',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'label' => 'User of the apps',
        ]);
    }
}
