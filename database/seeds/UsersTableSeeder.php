<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Daniel Dickson';
        $user->email = 'ninjadd@gmail.com';
        $user->password = bcrypt('6891ninja');
        $user->role = 'admin';
        $user->save();

        $faker = Faker::create();
        foreach (range(1, 10) as $item) {
            $user = new User();

            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = bcrypt('PourHouse');
            $user->save();
         }
    }
}
