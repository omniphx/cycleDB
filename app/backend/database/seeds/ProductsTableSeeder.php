<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Faker\Provider\Barcode;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $faker->addProvider(new Barcode($faker));

		foreach(range(1, 50) as $index)
		{
			Product::create([
                'name' => $faker->word(),
                'rating' => $faker->numberBetween(1,5),
                'msrp' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
                'part_number' => $faker->ean8(),
                'brand_id'    => $faker->numberBetween(1,10),
                'subcategory_id' => $faker->numberBetween(1,10),
                'created_at' => $faker->dateTime($max = 'now')
			]);
		}
	}

}