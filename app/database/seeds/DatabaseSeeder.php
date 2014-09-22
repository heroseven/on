<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('EmpresaTableSeeder');
		$this->command->info('Empresa table seeded!');

		$this->call('AgenteTableSeeder');
		$this->command->info('Agente table seeded!');
	}
}