<?php

use Illuminate\Database\Migrations\Migration;

class CreateUservacancyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_vacancy', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('vacancy_id')->unsigned();
	    $table->timestamp('left_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_vacancy');
    }

}