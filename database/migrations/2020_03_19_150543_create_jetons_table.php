<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJetonsTable extends Migration {

	public function up()
	{
		Schema::create('jetons', function(Blueprint $table) {
			$table->increments('id');
			$table->string('montant');
			$table->string('libelle');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('jetons');
	}
}