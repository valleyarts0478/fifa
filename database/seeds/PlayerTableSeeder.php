<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'team_id' => '1',
            'number' => '33',
            'p_name' => 'messi'
        ]);
        DB::table('players')->insert([
            'team_id' => '1',
            'number' => '55',
            'p_name' => 'tarou'
        ]);
        DB::table('players')->insert([
            'team_id' => '1',
            'number' => '66',
            'p_name' => 'takashi'
        ]);
        DB::table('players')->insert([
            'team_id' => '2',
            'number' => '22',
            'p_name' => 'ted88'
        ]);
        DB::table('players')->insert([
            'team_id' => '2',
            'number' => '44',
            'p_name' => 'red-99'
        ]);
        DB::table('players')->insert([
            'team_id' => '2',
            'number' => '77',
            'p_name' => 'tippun987'
        ]);
        DB::table('players')->insert([
            'team_id' => '3',
            'number' => '99',
            'p_name' => 'yabe'
        ]);
        DB::table('players')->insert([
            'team_id' => '3',
            'number' => '10',
            'p_name' => 'gollira'
        ]);
        DB::table('players')->insert([
            'team_id' => '3',
            'number' => '11',
            'p_name' => 'muutyan'
        ]);
    }
}
