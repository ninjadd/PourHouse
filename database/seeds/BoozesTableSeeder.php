<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Booze;

class BoozesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 21) as $item) {
            $booze = new Booze();
            $booze->user_id = $faker->numberBetween(1, 11);
            $booze->name = $faker->sentence(1, true);
            $booze->description = $faker->paragraph(3, true);
            $booze->price = '$'.$faker->randomFloat(2, 1, 25);
            $booze->save();
        }
    }
}
