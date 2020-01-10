<?php

use Illuminate\Database\Seeder;
use App\Pizza;
class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i=0; $i < 5; $i++) { 
            Pizza::create([
                "pizza_name"  => $faker->name,
                "pizza_image"  => $faker->image,
                "price" => $faker->randomDigit
            ]);    
        }

    }
}
