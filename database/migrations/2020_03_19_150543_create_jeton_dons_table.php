<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJetonDonsTable extends Migration {

	public function up()
	{
		Schema::create('jeton_dons', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('jeton_id')->unsigned();
			$table->integer('don_id')->unsigned();
			$table->string('nombre_unite');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('jeton_dons');
	}
}