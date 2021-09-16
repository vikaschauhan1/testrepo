<?php

use Illuminate\Database\Seeder;

class TemplateTableSeeder extends Seeder
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
            DB::table('AXIOM6_TEMPLATE_MASTER')
                ->insert([
                	
                    'TEMPLATEID' => $i,
                    'TEMPLATENAME' => $faker->lastName,
                     'TEMPLATEMESSAGE' => $faker->streetAddress,
                      'CREATIONDATE' =>  $faker->date('Y-m-d'),
                     // 'LAST_MODIFY_DATE' =>  $faker->date('Y-m-d'),
                      'CREATIONBY' =>  $i,
                      'LASTMODIFIEDBY' =>  $i,
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                       //'GROUP_TYPE' =>  $faker->date('Y-m-d'),
                 
                ]);
        endfor;
    }
}
