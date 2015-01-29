<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ComponentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Component::create([
                'name' => $faker->word(),
                'rating' => $faker->numberBetween(1,5),
                'msrp' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
                'manufacturer_id'    => $faker->numberBetween(1,14),
                'subcategory_id' => $faker->numberBetween(1,30),
                'created_at' => $faker->dateTime($max = 'now')
			]);
		}
	}

}