<?php

use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function($table) {
            $table->increments('id');
            $table->string('name', 1000);
            $table->text('description')->nullable();
            $table->integer('depth');
            $table->integer('site_id')->nullable();
            $table->string('icon_path', 255)->nullable();
            $table->integer('parent_id')->unsigned();
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
        Schema::drop('units');
    }

}