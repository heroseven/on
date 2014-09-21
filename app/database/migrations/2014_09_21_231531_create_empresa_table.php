<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaTable extends Migration {

	public function up()
	{
		Schema::create('empresa', function(Blueprint $table) {
			$table->integer('id', true);
			$table->string('email', 50)->unique();
			$table->string('nombre', 20);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('empresa');
	}
}