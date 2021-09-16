<?php

use Illuminate\Database\Seeder;

class GroupDetailTableSeeder extends Seeder
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
            DB::table('AXIOM6_GROUP_DETAIL')
                ->insert([
                	
                    'ID' => $i,
                    'GROUPID' => $i,
                     'MOBILENO' => $faker->phoneNumber,
                      'created_at' =>  $faker->date('Y-m-d'),
                      'updated_at' =>  $faker->date('Y-m-d'),
                      
                     // 'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                 
                ]);
        endfor;
    }
}
