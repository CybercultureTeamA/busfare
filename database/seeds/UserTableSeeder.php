<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new User();
        $role_user->name ='user';
        $role_user->description = 'a normal user';
        $role_user->user();
    }
}
