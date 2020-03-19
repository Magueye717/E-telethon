<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBesoinsTable extends Migration {

	public function up()
	{
		Schema::create('besoins', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libelle', 255);
			$table->string('type', 255);
			$table->string('region', 255)->nullable();
			$table->string('quantite')->nullable();
			$table->string('cout', 255);
			$table->boolean('etat');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('besoins');
	}
}