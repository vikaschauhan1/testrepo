<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = \Faker\Factory::create();

        for($i=1; $i<=100; $i++):
            DB::table('AXIOM6_GROUP_MASTER')
                ->insert([
                	
                    'USERID' => $i,
                    'GROUP_NAME' => $faker->firstName ,
                     'GROUP_SIZE' => $i+6,
                      'GROUP_CREATION_DATE' =>  $faker->date('Y-m-d'),
                      'LAST_MODIFY_DATE' =>  $faker->date('Y-m-d'),
                      'GROUP_COUNTRY_CODE' =>  $faker->date('Y-m-d'),
                      'GROUP_COUNTRY_CODE' =>  91,
                     // 'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                 
                ]);
        endfor;
    }
}
