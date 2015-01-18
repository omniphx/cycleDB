<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SubcategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Subcategory::create([
                'name' => $faker->word(),
                'category_id'    => $faker->randomNumber(1,5),
                'created_at' => $faker->dateTime($max = 'now')
			]);
		}
	}

}