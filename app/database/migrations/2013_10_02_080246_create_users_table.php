<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email');
            $table->string('password', 64);
            $table->smallInteger('gender')->default(User::GENDER_UNDEFINED);
            $table->string('address', 2000)->nullable();
            $table->string('mobile_phone', 15)->nullable();
            $table->string('verify_token', 40);
            $table->timestamps();
            $table->softDeletes();
	    
	    $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}