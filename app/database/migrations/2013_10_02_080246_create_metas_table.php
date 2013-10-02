<?php

use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function($table) {
            $table->increments('id');
            $table->string('key');
	    $table->text('domain');
	    $table->integer('site_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('metas');
    }

}