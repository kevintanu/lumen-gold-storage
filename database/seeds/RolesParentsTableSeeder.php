<?php

use Illuminate\Database\Seeder;

class RolesParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function insertRoleParent(int $roleID, int $parentID) {
            DB::table('roles_parents')->insert(['role_id' => $roleID, 'parent_id' => $parentID]);
        }

        insertRoleParent(1,2);
        insertRoleParent(1,3);
        insertRoleParent(2,3);
    }
}
