<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,50) as $item) {
            $title = $faker->sentence(3, true);
            $event = new Event();
            $event->user_id = $faker->numberBetween(1, 10);
            $event->artist = $faker->name;
            $event->title = $title;
            $event->slug = str_slug($title);
            $event->date = $faker->dateTimeThisMonth();
            $event->start_time = '8:00 PM';
            $event->end_time = '9:30 PM';
            $event->description = $faker->paragraph(7, true);
            $event->category = $faker->randomElement(['Concert', 'Festival', 'Show', 'Shower']);
            $event->image = $faker->imageUrl(640, 480);

            $event->save();
        }

    }
}
