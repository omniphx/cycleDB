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
                'name' => $faker->unique()->word(),
                'rating' => $faker->numberBetween(1,5),
                'msrp' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
                'manufacturer_id'    => $faker->numberBetween(1,73),
                'subcategory_id' => $faker->numberBetween(1,23),
                'created_at' => $faker->dateTime($max = 'now')
			]);

		}
	}

}