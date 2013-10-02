<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserannouncementTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_announcement', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('announcement_id')->unsigned();
            $table->timestamp('read_time')->nullable();
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
        Schema::drop('user_announcement');
    }

}