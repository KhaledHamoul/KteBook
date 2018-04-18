<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinsOffresTable extends Migration {

	public function up()
	{
		Schema::create('fins_offres', function(Blueprint $table) {
			$table->integer('id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('fins_offres');
	}
}