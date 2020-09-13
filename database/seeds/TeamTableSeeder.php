<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            't_name' => 'A-team',
        ]);
        DB::table('teams')->insert([
            't_name' => 'B-team',
        ]);
        DB::table('teams')->insert([
            't_name' => 'C-team',
        ]);
    }
}
