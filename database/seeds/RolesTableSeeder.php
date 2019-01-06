<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function insertRoles(string $title) {
            DB::table('roles')->insert(['title' => $title]);
        }

        insertRoles('Admin');
        insertRoles('SuperAdmin');
        insertRoles('Master');
    }
}
