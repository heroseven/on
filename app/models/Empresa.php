<?php

class Empresa extends Eloquent {

	protected $table = 'empresa';
	public $timestamps = true;

	public function agentes()
	{
		return $this->hasMany('Agente', 'id_empresa');
	}

}