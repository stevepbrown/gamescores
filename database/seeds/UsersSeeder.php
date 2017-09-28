<?php

use Illuminate\Database\Seeder;


class UsersSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $faker = Faker\Factory::create();

    for($i = 0; $i < 100; $i++) {
      App\models\User::create([
                'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('somethinglongandcomplicated')
      ]);
    }
  }
}
