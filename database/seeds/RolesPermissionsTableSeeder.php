<?php

use Illuminate\Database\Seeder;

class RolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function insertRolePermission(int $roleID, int $permissionID) {
            DB::table('roles_permissions')->insert(['role_id' => $roleID, 'permission_id' => $permissionID]);
        }
        insertRolePermission(2, 1);
        insertRolePermission(2, 2);
        insertRolePermission(2, 3);
        insertRolePermission(2, 4);
        insertRolePermission(3, 1);
        insertRolePermission(3, 2);
        insertRolePermission(3, 3);
        insertRolePermission(3, 4);
    }
}
