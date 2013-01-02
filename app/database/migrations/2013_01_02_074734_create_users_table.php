<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
        Schema::create('users', function($t) {
          $t->increments('id');
          $t->string('real_name', 80);
          $t->string('email', 64);
          $t->string('password', 64);
          $t->integer('age')->nullable();
        });
	}

	public function down()
	{
		Schema::drop('users');
	}

}