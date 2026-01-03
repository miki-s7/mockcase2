<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class Admin_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
        'email' => 'admin@xxx.jp',
        'password' => Hash::make('admin1234')

    ];
    DB::table('admin_users')->insert($admin);
    }
}
