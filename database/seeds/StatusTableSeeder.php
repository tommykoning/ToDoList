<?php

use Illuminate\Database\Seeder;


class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status_name' => 'done'
        ]);

        DB::table('statuses')->insert([
            'status_name' => 'stanby'
        ]);

        DB::table('statuses')->insert([
            'status_name' => 'in progress'
        ]);

        DB::table('statuses')->insert([
            'status_name' => 'droped'
        ]);
    }
}
