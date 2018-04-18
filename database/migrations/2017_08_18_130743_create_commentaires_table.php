<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentairesTable extends Migration {

	public function up()
	{
		Schema::create('commentaires', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('prod_id')->unsigned();
			$table->integer('id_user')->unsigned();
			$table->text('comment');
		});
	}

	public function down()
	{
		Schema::drop('commentaires');
	}
}