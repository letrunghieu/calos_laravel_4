<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function($table) {
            $table->increments('id');
            $table->string('title', 1000);
            $table->text('content');
            $table->smallInteger('type');
            $table->string('creator_comment', 2000);
            $table->timestamp('deadline');
            $table->integer('assignee_id')->unsigned()->nullable();
            $table->timestamp('assigning_time')->nullable();
            $table->integer('percentage');
            $table->timestamp('complete_time')->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('creator_id')->unsigned();
            $table->integer('unit_id')->unsigned();
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
        Schema::drop('activities');
    }

}