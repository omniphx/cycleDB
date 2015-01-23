<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('slug')->nullable();
			$table->integer('rating');
			$table->integer('part_number');
			$table->integer('msrp');
			$table->integer('brand_id')->unsigned();
			$table->foreign('brand_id')->references('id')->on('brands');
			$table->integer('subcategory_id')->unsigned();
			$table->foreign('subcategory_id')->references('id')->on('categories');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
