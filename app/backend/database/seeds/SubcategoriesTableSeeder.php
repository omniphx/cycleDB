<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SubcategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        //Cockpit categories
		Subcategory::create([
            'name' => 'Handlebars',
            'category_id' => 1,
            'created_at' => $faker->dateTime($max = 'now')
		]);
        Subcategory::create([
            'name' => 'Stem',
            'category_id' => 1,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Grips',
            'category_id' => 1,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Bar Ends',
            'category_id' => 1,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Right Shifter',
            'category_id' => 1,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Left Shifter',
            'category_id' => 1,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Headset',
            'category_id' => 1,
            'created_at' => $faker->dateTime($max = 'now')
        ]);

        //Basics
        Subcategory::create([
            'name' => 'Fork',
            'category_id' => 2,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Frame',
            'category_id' => 2,
            'created_at' => $faker->dateTime($max = 'now')
        ]);

        //Seat
        Subcategory::create([
            'name' => 'Seat Collar',
            'category_id' => 3,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Saddle',
            'category_id' => 3,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Seatpost',
            'category_id' => 3,
            'created_at' => $faker->dateTime($max = 'now')
        ]);

        //Drivetrain
        Subcategory::create([
            'name' => 'Bottom Bracket',
            'category_id' => 4,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Crankset',
            'category_id' => 4,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Pedals',
            'category_id' => 4,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Front Derailleur',
            'category_id' => 4,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Rear Derailleur',
            'category_id' => 4,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Cassette',
            'category_id' => 4,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Chain',
            'category_id' => 4,
            'created_at' => $faker->dateTime($max = 'now')
        ]);

        //Brake & Wheels
        Subcategory::create([
            'name' => 'Front Wheel',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Hub',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Rim',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Tire',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Front brake',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Lever',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Caliper',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Disc',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Rear brake',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Lever',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Caliper',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);
        Subcategory::create([
            'name' => 'Disc',
            'category_id' => 5,
            'created_at' => $faker->dateTime($max = 'now')
        ]);

	}

}