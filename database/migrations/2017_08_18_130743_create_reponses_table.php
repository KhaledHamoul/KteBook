<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReponsesTable extends Migration {

	public function up()
	{
		Schema::create('reponses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('comment_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('ansewer');
		});
	}

	public function down()
	{
		Schema::drop('reponses');
	}
}