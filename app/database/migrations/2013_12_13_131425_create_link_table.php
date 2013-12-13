<?php

use Illuminate\Database\Migrations\Migration;

class CreateLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('links', function($table)
		{
		    $table->increments('id');
		    $table->integer('source_id')->unsigned();
		    $table->integer('target_id')->unsigned();
		    $table->integer('type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('links');
	}

}