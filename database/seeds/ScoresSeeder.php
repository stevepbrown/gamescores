<?php

use Illuminate\Database\Seeder;

class ScoresSeeder extends Seeder
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
          'difficulty' => 'Basic',
          'moderated'=> true,
      ]);

      DB::table('scores')->insert([
          'user_id' => '2',
          'score' => '200',
          'difficulty' => 'Intermediate',
          'moderated'=> true,
      ]);

      DB::table('scores')->insert([
          'user_id' => '3',
          'score' => '300',
          'difficulty' => 'Basic',
          'moderated'=> true,
      ]);

      DB::table('scores')->insert([
          'user_id' => '4',
          'score' => '400',
          'difficulty' => 'Difficult',
          'moderated'=> true,
      ]);

      DB::table('scores')->insert([
          'user_id' => '5',
          'score' => '500',
          'difficulty' => 'Basic',
          'moderated'=> true,
      ]);

      DB::table('scores')->insert([
          'user_id' => '6',
          'score' => '600',
          'difficulty' => 'Difficult',
          'moderated'=> true,
      ]);

      DB::table('scores')->insert([
          'user_id' => '7',
          'score' => '700',
          'difficulty' => 'Basic',
          'moderated'=> true,
      ]);
      DB::table('scores')->insert([
          'user_id' => '8',
          'score' => '800',
          'difficulty' => 'Intermediate',
          'moderated'=> true,
      ]);

      DB::table('scores')->insert([
          'user_id' => '9',
          'score' => '900',
          'difficulty' => 'Basic',
          'moderated'=> true,
      ]);

      DB::table('scores')->insert([
          'user_id' => '10',
          'score' => '1000',
          'difficulty' => 'Basic',
          'moderated'=> true,
      ]);
    }
}
