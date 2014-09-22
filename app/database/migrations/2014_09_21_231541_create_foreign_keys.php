<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('agente', function(Blueprint $table) {
			$table->foreign('id_empresa')->references('id')->on('empresa');
		});
	}

	public function down()
	{
		Schema::table('agente', function(Blueprint $table) {
			$table->dropForeign('agente_id_empresa_foreign');
		});
	}
}