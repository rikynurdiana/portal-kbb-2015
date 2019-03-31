<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'superadmin@portal.dev',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@portal.dev',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@portal.dev',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@portal.dev',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@portal.dev',
            'password' => bcrypt('123456'),
        ]);
    }
}
