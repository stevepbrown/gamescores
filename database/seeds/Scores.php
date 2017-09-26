<?php

use Illuminate\Database\Seeder;

class Scores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('scores')->insert([
          'user_id' => '1',
          'score' => '100',
      ]);

      DB::table('scores')->insert([
          'user_id' => '2',
          'score' => '200',
      ]);

      DB::table('scores')->insert([
          'user_id' => '3',
          'score' => '300',
      ]);

      DB::table('scores')->insert([
          'user_id' => '4',
          'score' => '400',
      ]);

      DB::table('scores')->insert([
          'user_id' => '5',
          'score' => '500',
      ]);

      DB::table('scores')->insert([
          'user_id' => '6',
          'score' => '600',
      ]);

      DB::table('scores')->insert([
          'user_id' => '7',
          'score' => '700',
      ]);
      DB::table('scores')->insert([
          'user_id' => '8',
          'score' => '800',
      ]);

      DB::table('scores')->insert([
          'user_id' => '9',
          'score' => '900',
      ]);

      DB::table('scores')->insert([
          'user_id' => '10',
          'score' => '1000',
      ]);
    }
}
