<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Category::create(['name' => 'Cockpit']);
		Category::create(['name' => 'Basics']);
		Category::create(['name' => 'Seat']);
		Category::create(['name' => 'Drivetrain']);
		Category::create(['name' => 'Brakes & Wheels']);
		Category::create(['name' => 'Other']);
		Category::create(['name' => 'Bikes']);
	}

}