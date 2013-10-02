<?php

use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function($table) {
            $table->increments('id');
            $table->string('title', 1000);
            $table->text('content');
            $table->integer('creator_id')->unsigned();
            $table->integer('site_id')->unsigned();
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
        Schema::drop('announcements');
    }

}