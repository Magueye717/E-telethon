<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonsTable extends Migration {

	public function up()
	{
		Schema::create('dons', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('donateur_id')->unsigned();
			$table->string('montant', 255);
			$table->integer('besoin_id')->unsigned()->nullable();
			$table->string('type_don', 255);
			$table->string('nombre_unite', 255);
			$table->timestamps();
			$table->string('statut')->default('Promesse');
		});
	}

	public function down()
	{
		Schema::drop('dons');
	}
}