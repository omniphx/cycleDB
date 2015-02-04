<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComponentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('components', function(Blueprint $table)
		{
			$table->string('name');
			$table->string('slug')->nullable();
			$table->integer('rating')->nullable();
			$table->integer('msrp')->nullable();
			$table->integer('year')->nullable();
			$table->integer('manufacturer_id')->unsigned()->nullable();
			$table->foreign('manufacturer_id')->references('id')->on('manufacturers');
			$table->integer('subcategory_id')->unsigned()->nullable();
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
		Schema::drop('components');
	}

}
