<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('contacts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('paniers', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('paniers', function(Blueprint $table) {
			$table->foreign('prod_id')->references('id')->on('contacts')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reponses', function(Blueprint $table) {
			$table->foreign('comment_id')->references('id')->on('commentaires')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reponses', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('produits', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('livres', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('produits')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('fins_offres', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('produits')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ventes', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('produits')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('photos', function(Blueprint $table) {
			$table->foreign('prod_id')->references('id')->on('produits')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('commentaires', function(Blueprint $table) {
			$table->foreign('prod_id')->references('id')->on('produits')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('commentaires', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('contacts', function(Blueprint $table) {
			$table->dropForeign('contacts_user_id_foreign');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->dropForeign('notifications_user_id_foreign');
		});
		Schema::table('paniers', function(Blueprint $table) {
			$table->dropForeign('paniers_id_user_foreign');
		});
		Schema::table('paniers', function(Blueprint $table) {
			$table->dropForeign('paniers_prod_id_foreign');
		});
		Schema::table('reponses', function(Blueprint $table) {
			$table->dropForeign('reponses_comment_id_foreign');
		});
		Schema::table('reponses', function(Blueprint $table) {
			$table->dropForeign('reponses_user_id_foreign');
		});
		Schema::table('produits', function(Blueprint $table) {
			$table->dropForeign('produits_user_id_foreign');
		});
		Schema::table('livres', function(Blueprint $table) {
			$table->dropForeign('livres_id_foreign');
		});
		Schema::table('fins_offres', function(Blueprint $table) {
			$table->dropForeign('fins_offres_id_foreign');
		});
		Schema::table('ventes', function(Blueprint $table) {
			$table->dropForeign('ventes_id_foreign');
		});
		Schema::table('photos', function(Blueprint $table) {
			$table->dropForeign('photos_prod_id_foreign');
		});
		Schema::table('commentaires', function(Blueprint $table) {
			$table->dropForeign('commentaires_prod_id_foreign');
		});
		Schema::table('commentaires', function(Blueprint $table) {
			$table->dropForeign('commentaires_id_user_foreign');
		});
	}
}