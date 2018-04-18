<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsTable extends Migration {

	public function up()
	{
		Schema::create('produits', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->enum('type_prod', array('livre', 'autre'));
			$table->enum('type_offre', array('vente', 'echange'));
			$table->enum('etat_offre', array('enCours', 'fini'));
			$table->text('description');
			$table->string('lieu');
		});
	}

	public function down()
	{
		Schema::drop('produits');
	}
}