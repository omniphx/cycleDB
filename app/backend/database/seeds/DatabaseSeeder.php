<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ManufacturersTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('SubcategoriesTableSeeder');
		$this->call('ComponentsTableSeeder');
		$this->call('BikesTableSeeder');
	}

}