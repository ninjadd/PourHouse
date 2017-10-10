<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Farm and Garden'
        ]);

        Type::create([
            'name' => 'Sandwiches and Such'
        ]);

        Type::create([
            'name' => 'Small Plates'
        ]);

        Type::create([
            'name' => 'Local Favorites'
        ]);

        Type::create([
            'name' => 'Brunch'
        ]);

        Type::create([
            'name' => 'Rediscovered Classics'
        ]);

        Type::create([
            'name' => 'Just for Fun'
        ]);

        Type::create([
            'name' => 'Draught Beer'
        ]);

        Type::create([
            'name' => 'Bottles & Cans'
        ]);

        Type::create([
            'name' => 'Wine & Bubbly'
        ]);

    }
}
