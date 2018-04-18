<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivresTable extends Migration {

	public function up()
	{
		Schema::create('livres', function(Blueprint $table) {
			$table->integer('id')->unsigned();
			$table->string('titre');
			$table->text('domaine');
			$table->enum('langue', array('fr', 'ar','en', 'au'));
			$table->tinyInteger('etat_livre');
		});
	}

	public function down()
	{
		Schema::drop('livres');
	}
}