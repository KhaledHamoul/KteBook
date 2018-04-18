<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVentesTable extends Migration {

	public function up()
	{
		Schema::create('ventes', function(Blueprint $table) {
			$table->integer('id')->unsigned();
			$table->decimal('prix');
		});
	}

	public function down()
	{
		Schema::drop('ventes');
	}
}