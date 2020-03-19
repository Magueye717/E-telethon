<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('prenom', 255);
			$table->string('nom', 255);
			$table->string('Tel', 14);
			$table->string('email', 25);
			$table->string('poste', 255);
			$table->string('localite');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}