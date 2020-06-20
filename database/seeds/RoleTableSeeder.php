<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name ='user';
        $role_user->description = 'a normal user';
        $role_user->user();

        $role_author = new Role();
        $role_author->name ='Author';
        $role_author->description = 'a normal author';
        $role_author->user();

        $role_admin = new Role();
        $role_admin->name ='Admin';
        $role_admin->description = 'a normal admin';
        $role_admin->user();

    }
}
