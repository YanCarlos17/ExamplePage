<?php

class Entrada extends Eloquent{

	protected $table = 'entradas';
	protected $primaryKey ='ID_ENTRADA';
	public $timestamps=false;

	public function comentario()
    {
        return $this->hasMany('Comentario');
    }

    public function megusta()
    {
        return $this->hasMany('Megusta');
    }

}