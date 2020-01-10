<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Pizza;
class OrderTableSeeder extends Seeder
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
        $pizza = Pizza::find(9);
        for ($i=0; $i < 5; $i++) { 
            Order::create([
                "table_no"  => $faker->randomDigit,
                "size"  => $faker->name,
                "number" => $faker->randomDigit,
                "total_price" => $faker->numberBetween($min = 1000, $max = 9000),
                "pizza_id" => $pizza->id
            ]);    
        }
    }
}
