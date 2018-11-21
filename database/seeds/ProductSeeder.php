<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,6) as $index) {
	        DB::table('products')->insert([
                'name' => $faker->word,
                'description' => $faker->sentence(10, false),
                'price' => $faker->randomDigitNotNull,
                'discount' => 0
	        ]);
        }
    }
}
