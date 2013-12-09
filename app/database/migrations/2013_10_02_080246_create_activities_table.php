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
	    $table->integer('type');
            $table->string('creator_comment', 2000)->nullable();
            $table->timestamp('deadline');
            $table->timestamp('start_time');
	    $table->integer('holder_id')->unsigned()->nullable();
	    $table->timestamp('holding_time')->nullable();
            $table->integer('assignee_id')->unsigned()->nullable();
            $table->timestamp('assigning_time')->nullable();
            $table->integer('percentage');
            $table->timestamp('complete_time')->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('creator_id')->unsigned();
            $table->integer('unit_id')->unsigned();
	    $table->boolean('parent_deleted')->default(false);
	    $table->integer('recur_id')->nullable();
	    $table->integer('top_most_id')->nullable();
	    $table->string('constraints')->nullable();
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