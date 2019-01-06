<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function insertGroup(string $title) {
            DB::table('groups')->insert(['title' => $title]);
        }

        insertGroup('A');
        insertGroup('B');
        insertGroup('C');
        insertGroup('D');
    }
}
