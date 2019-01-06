<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('RolesParentsTableSeeder');
        $this->call('PermissionsTableSeeder');
        $this->call('RolesPermissionsTableSeeder');
        $this->call('GroupsTableSeeder');
        $this->call('GroupMembersTableSeeder');

    }
}
