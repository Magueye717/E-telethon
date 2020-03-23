<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonateursTable extends Migration {

	public function up()
	{
		Schema::create('donateurs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libelle')->nullable();
			$table->string('rc', 255)->nullable();
			$table->string('ninea', 255)->nullable();
			$table->string('identification')->nullable();
			$table->string('cni', 18)->nullable();
			$table->timestamps();
			$table->integer('contact_id')->unsigned()->nullable();
			$table->integer('besoin_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('donateurs');
	}
}