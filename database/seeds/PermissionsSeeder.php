<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'add',
            'label' => 'Can add content',
        ]);

        DB::table('permissions')->insert([
            'name' => 'edit',
            'label' => 'Can edit content',
        ]);

        DB::table('permissions')->insert([
            'name' => 'delete',
            'label' => 'Can delete content',
        ]);

        DB::table('permissions')->insert([
            'name' => 'show',
            'label' => 'Can show content',
        ]);
    }
}
