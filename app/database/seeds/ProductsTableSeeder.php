<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Product::create([
                'name' => $faker->word(),
                'rating' => $faker->randomNumber(1,5),
                'brand_id'    => $faker->randomNumber(1,10),
                'subcategory_id'    => $faker->randomNumber(1,10),
                'created_at' => $faker->dateTime($max = 'now')
			]);
		}
	}

}