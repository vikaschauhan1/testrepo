<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
            DB::table('AXIOM6_USER_MASTER')
                ->insert([
                	
                    'USERID' => $i,
                    'PASSWORD' => '$2y$10$744Oho2jTIy/AqgLKoy0uO5ZBOWfoymujUFjNrsyCToQv4HdvuToO',
                     'USERNAME' => $faker->name,
                     'NAME' => $faker->firstName,
                      'EMAIL' =>  $faker->safeEmail,
                      'remember_token' =>  '$2y$10$744Oho2jTIy/AqgLKoy0uO5ZBOWfoymujUFjNrsyCToQv4HdvuTo1',
                      'created_at' =>  $faker->dateTimeBetween('-5 day', '30 day'),
                      'updated_at' =>   $faker->dateTimeBetween('-5 day', '30 day'),
                     // 'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                 
                ]);
        endfor;
    }


    
}
