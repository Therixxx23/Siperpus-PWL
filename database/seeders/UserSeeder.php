<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i < 50; $i++){
            $npm = $faker->unique()->numerify("##########");
            $firstname = $faker->firstName();
            $lastname = $faker->lastName();

            DB::table('users')->insert([
            'npm' => $npm,
            'username' => $faker->userName,
            'first_name' => $firstname,
            'last_name' => $lastname,
            'email' => $faker->email(),
            'password' => Hash::make('password'),
            'fullname' => $firstname . '' . $lastname
        ]);
        }
    }
}
