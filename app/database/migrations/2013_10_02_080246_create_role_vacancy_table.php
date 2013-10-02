<?php

use Illuminate\Database\Migrations\Migration;

class CreateRolevacancyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_vacancy', function($table) {
            $table->increments('id');
            $table->integer('vacancy_id')->unsigned();
            $table->integer('role_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_vacancy');
    }

}