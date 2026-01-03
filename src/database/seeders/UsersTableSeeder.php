<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'user',
            'email' => 'user@xxx.jp',
            'password' => Hash::make('user1234')
        ];
        DB::table('users')->insert($user);
    }
}
