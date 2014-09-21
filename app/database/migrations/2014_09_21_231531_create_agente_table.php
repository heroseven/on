<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgenteTable extends Migration {

	public function up()
	{
		Schema::create('agente', function(Blueprint $table) {
			$table->integer('id', true);
			$table->string('email', 50)->unique();
			$table->string('nombre');
			$table->string('descripcion');
			$table->integer('id_empresa')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('agente');
	}
}