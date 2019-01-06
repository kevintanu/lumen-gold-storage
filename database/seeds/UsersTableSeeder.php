<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'username' => 'admin',
            'password' => 'secret',
            'passcode' => '123456'
        ]);
        factory(User::class)->create([
            'username' => 'super-admin',
            'password' => 'secret',
            'passcode' => '123456'
        ]);
        factory(User::class)->create([
            'username' => 'master',
            'password' => 'secret',
            'passcode' => '123456'
        ]);
        factory(User::class, 20)->create();
    }
}
