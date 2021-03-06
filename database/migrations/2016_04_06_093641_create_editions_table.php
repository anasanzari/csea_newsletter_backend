<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('editions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->integer('month');
			$table->integer('year');
			$table->integer('is_published');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('editions');
	}

}
