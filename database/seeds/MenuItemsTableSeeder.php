<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 25) as $item) {
            $menuItem = new MenuItem();
            $menuItem->user_id = $faker->numberBetween(1, 11);
            $menuItem->type_id = $faker->numberBetween(1, 5);
            $title = $faker->words(3, true);
            $slug = str_slug($title);
            $menuItem->title = $title;
            $menuItem->slug = $slug;
            $menuItem->description = $faker->sentence(6, true);
            $menuItem->price = '$'.$faker->randomFloat(2,7, 100);
            $menuItem->image = $faker->optional()->imageUrl(640, 480, true);
            $menuItem->save();
        }
    }
}
