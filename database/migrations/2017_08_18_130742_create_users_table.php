<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
		    $table->rememberToken();
			$table->string('email');
			$table->string('user_name');
			$table->string('nom');
			$table->string('prenom');
			$table->string('password');
			$table->string('wilaya');
			$table->string('photo_user')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}