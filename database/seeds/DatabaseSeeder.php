<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(TimesTableSeeder::class);
        $this->call(BoozesTableSeeder::class);
        $this->call(FoodsTableSeeder::class);
    }
}
