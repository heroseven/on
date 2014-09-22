<?php

class EmpresaTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('empresa')->delete();

		// 1
		Empresa::create(array(
				'id' => 1,
				'email' => 'nbr920@gmail.com',
				'nombre' => 'HeroCloud'
			));

		// 2
		Empresa::create(array(
				'id' => 2,
				'email' => 'chris@gmail.com',
				'nombre' => 'Abogados Anton'
			));
	}
}