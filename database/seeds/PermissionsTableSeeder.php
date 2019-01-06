<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function insertPermission(string $task) {
            DB::table('permissions')->insert(['task' => $task]);
        }

        insertPermission('ADD_USER');
        insertPermission('VIEW_USER');
        insertPermission('EDIT_USER');
        insertPermission('DELETE_USER');
    }
}
