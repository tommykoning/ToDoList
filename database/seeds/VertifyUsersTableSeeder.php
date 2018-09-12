<?php

use Illuminate\Database\Seeder;

class VertifyUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('verify_users')->insert([
            'user_id' => 1,
            'token' => str_random(40),
        ]);
    }
}
