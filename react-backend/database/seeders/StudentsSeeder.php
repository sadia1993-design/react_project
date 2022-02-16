<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $faker = Faker::create();
          for($i=0; $i<=15; $i++){
              DB::table('students')->insert([
                 'name' => $faker->name(),
                 'city' => $faker->city(),
                 'fees' => $faker->randomFloat(2),
              ]);
          }
    }
}
