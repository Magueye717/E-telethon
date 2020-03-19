<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('besoins', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('besoins')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('donateurs', function(Blueprint $table) {
			$table->foreign('contact_id')->references('id')->on('contacts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('donateurs', function(Blueprint $table) {
			$table->foreign('besoin_id')->references('id')->on('besoins')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('donateurs', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dons', function(Blueprint $table) {
			$table->foreign('donateur_id')->references('id')->on('donateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dons', function(Blueprint $table) {
			$table->foreign('besoin_id')->references('id')->on('besoins')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('jeton_dons', function(Blueprint $table) {
			$table->foreign('jeton_id')->references('id')->on('jetons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('jeton_dons', function(Blueprint $table) {
			$table->foreign('don_id')->references('id')->on('dons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('besoins', function(Blueprint $table) {
			$table->dropForeign('besoins_user_id_foreign');
		});
		Schema::table('donateurs', function(Blueprint $table) {
			$table->dropForeign('donateurs_contact_id_foreign');
		});
		Schema::table('donateurs', function(Blueprint $table) {
			$table->dropForeign('donateurs_besoin_id_foreign');
		});
		Schema::table('donateurs', function(Blueprint $table) {
			$table->dropForeign('donateurs_user_id_foreign');
		});
		Schema::table('dons', function(Blueprint $table) {
			$table->dropForeign('dons_donateur_id_foreign');
		});
		Schema::table('dons', function(Blueprint $table) {
			$table->dropForeign('dons_besoin_id_foreign');
		});
		Schema::table('jeton_dons', function(Blueprint $table) {
			$table->dropForeign('jeton_dons_jeton_id_foreign');
		});
		Schema::table('jeton_dons', function(Blueprint $table) {
			$table->dropForeign('jeton_dons_don_id_foreign');
		});
	}
}