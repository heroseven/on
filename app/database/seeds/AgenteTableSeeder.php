<?php

class AgenteTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('agente')->delete();

		// 1
		Agente::create(array(
				'id' => 1,
				'email' => 'andrea@gmail.com',
				'nombre' => 'Andrea Vargas',
				'descripcion' => 'Ingeniera Industrial',
				'id_empresa' => 1
			));

		// 2
		Agente::create(array(
				'id' => 2,
				'email' => 'barbarita@gmail.com',
				'nombre' => 'Barbara Vargas',
				'descripcion' => 'Gerente de Marketing',
				'id_empresa' => 2
			));
	}
}