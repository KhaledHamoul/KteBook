<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaniersTable extends Migration {

	public function up()
	{
		Schema::create('paniers', function(Blueprint $table) {
			$table->integer('id_user')->unsigned();
			$table->integer('prod_id')->unsigned();
			$table->integer('id', true);
		});
	}

	public function down()
	{
		Schema::drop('paniers');
	}
}