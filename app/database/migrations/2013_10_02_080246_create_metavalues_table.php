<?php

use Illuminate\Database\Migrations\Migration;

class CreateMetavaluesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metavalues', function($table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned();
            $table->integer('meta_id')->unsigned();
            $table->text('value');
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
        Schema::drop('metavalues');
    }

}