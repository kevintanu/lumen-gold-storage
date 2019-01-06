<?php

use Illuminate\Database\Seeder;

class GroupMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function insertGroupMember(string $userID, string $groupID, string $roleID) {
            DB::table('group_members')->insert(['user_id' => $userID, 'group_id' => $groupID, 'role_id' => $roleID]);
        }

        $userIDs = DB::table('users')->select('id')->get()->pluck('id')->toArray();
        $groupIDs = DB::table('groups')->select('id')->get()->pluck('id')->toArray();
        $roleIDs = DB::table('roles')->select('id')->get()->pluck('id')->toArray();
        foreach ($userIDs as $userID) {
            switch ($userID) {
                case 1:
                case 2:
                case 3:
                    insertGroupMember($userID, 1, $userID);
                    break;
                
                default:
                    insertGroupMember($userID, rand(1, sizeof($groupIDs)) ,rand(1, sizeof($roleIDs)));
                    break;
            }
        }
    }
}
