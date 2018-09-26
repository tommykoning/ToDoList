<?php

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
        DB::table('users')->insert([
            'name' => 'tommy koning',
            'email' => 'admin@test.nl',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'verified' => 1,
        ]);
    }
}
