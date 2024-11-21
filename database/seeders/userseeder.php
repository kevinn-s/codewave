<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i <= 5; $i++){
            DB::table('users')->insert(
                [
                    "name"=>$faker->name, 
                    "password"=>$faker->password,
                    "email"=>$faker->email,
                    "email_verified_at"=>$faker->date
                ]);
        }
    
        //
        }
}
