<?php

class Megusta extends Eloquent{

	protected $table = 'megusta';
	protected $primaryKey ='ID_MEGUSTA';
	public $timestamps=false;

	public static function entradamegusta(){

		return $this->belongsTo('Entrada');
	}

}