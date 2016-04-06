<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',50);
			$table->string('author',30);
			$table->integer('edition')->unsigned()->nullable();
			$table->integer('number');
			$table->text('content');
			$table->foreign('edition')->references('id')->on('editions');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('articles');
	}

}
