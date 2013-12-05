<?php

use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementUnitTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('announcement_unit', function($table)
		{
		    $table->increments('id');
		    $table->integer('unit_id')->unsigned();
		    $table->integer('announcement_id')->unsigned();
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
	Schema::drop('announcement_unit');
    }

}