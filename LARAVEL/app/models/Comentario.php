<?php

class Comentario extends Eloquent{

	protected $table = 'comentarios';
	protected $primaryKey ='ID_COMENTARIO';
	public $timestamps=false;

	public static function entrada(){

		return $this->belongsTo('Entrada');
	}
}
?>