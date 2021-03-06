<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {

	public function up()
	{
		Schema::create('photos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('prod_id')->unsigned();
			$table->string('chemin');
		});
	}

	public function down()
	{
		Schema::drop('photos');
	}
}