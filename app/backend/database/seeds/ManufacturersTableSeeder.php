<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ManufacturersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 15) as $index)
		{
			Manufacturer::create([
                'name' => $faker->word(),
                'type' => $faker->word(),
                'created_at' => $faker->dateTime($max = 'now')
			]);
		}
	}

}