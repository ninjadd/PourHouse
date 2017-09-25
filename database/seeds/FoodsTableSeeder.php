<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Food;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $item) {
            $food = new Food();

            $food->user_id = $faker->numberBetween(1, 11);
            $food->name = $faker->sentence(1, true);
            $food->description = $faker->paragraph(7, true);
            $food->price = '$'.$faker->randomFloat(2, 1, 25);
            $food->menu = $faker->randomElement(['Brunch', 'Lunch', 'Dinner', 'New', 'Specials']);
            $food->image = $faker->optional()->imageUrl(640, 480);

            $food->save();
        }
    }
}
