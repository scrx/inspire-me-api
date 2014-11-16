<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('username', 50);
            $table->string('email', 50)->unique();
            $table->string('photo', 100);
            $table->string('password', 100);
            $table->string('password_temp', 100);
            $table->string('resetcode', 50);
            $table->string('access', 50);
            $table->string('active', 50);
            $table->string('isdel', 50);
            $table->timestamp('last_login');
            $table->string('remember_token', 75);
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
        Schema::drop('users');
    }

}
