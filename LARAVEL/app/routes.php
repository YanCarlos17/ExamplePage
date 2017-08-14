<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/feliz-navidad-aguila-roja', function(){
	return View::make('videonavidad2016');
});

Route::get('/sitemap',function(){
	return View::make('sitemap');
});

Route::get('/terminos-decora-y-gana', function(){
	return View::make('concurso-decora-y-gana-terminos');
});

// Route::post('pruebita','MainController@pruebita');

Route::get('/sitemap.html',function(){
	return View::make('sitemap');
});

Route::get('/sitemap', array('as' => 'sitemap', function(){return View::make('sitemap');}));

Route::post('store','MainController@store');


Route::get('/calendario-copa-america-chile-2015',function(){
	return View::make('calendario-copa');
});

Route::get('/calendario-copa-america-chile-2015', array('as' => 'calendario-copa-america-chile-2015', function(){return View::make('calendario-copa');}));



Route::get('/','MainController@index',function(){
	return View::make('index');
});

Route::get('/quienesSomos','MainController@quienesSomos',function(){
	return View::make('quienesSomos');
});

Route::get('/contacto','MainController@contacto',function(){
	return View::make('contacto');
});

Route::get('/wallpapers','MainController@papelTapiz');

Route::get('/nuestraImagen','MainController@nuestraImagen');

Route::get('/recetas-de-cafe','MainController@recetas');

Route::get('/nuevaReceta','MainController@nuevaReceta',function(){
	return View::make('nuevaReceta');
});

Route::get('/proceso-de-produccion-del-cafe',function(){
	return View::make('timeline');
});
Route::get('/proceso-de-produccion-del-cafe', array('as' => 'proceso-de-produccion-del-cafe', function(){return View::make('timeline');}));

Route::get('/clubGranito','MainController@clubGranito');

Route::get('/politica',function(){
	return View::make('politica');
});

Route::get('/politica-de-tratamiento-de-datos-personales',['as' => 'politicaDatosPersonales', function(){

    return View::make('politicadatospersonales');

}]);

Route::get('politicas-de-etica-Empresarial-y-Antisoborno',['as' => 'politicaEticaEmpresarial', function(){
    return View::make('politicasEticaEmpresarial');
}]);

Route::get('/terminos',function(){
	return View::make('terminos');
});

Route::get('/terminos-concurso',['as' => 'terminos-concurso',function(){
	return View::make('terminos-concurso');
}]);

Route::get('/produccion',function(){
	return View::make('mantenimiento');
});

Route::get('/cafe-aguila-roja-en-colombia',function(){
	return View::make('mapa');
});

Route::get('/cafe-aguila-roja-en-colombia', array('as' => 'cafe-aguila-roja-en-colombia', function(){return View::make('mapa');}));


Route::get('/', array('as' => 'index', function(){return View::make('sectIndex');}));

Route::get('/quienesSomos', array('as' => 'quienesSomos', function(){return View::make('sectQuienesSomos');}));
Route::get('/contacto', array('as' => 'contacto', function(){return View::make('sectContacto');}));
Route::get('/wallpapers',array('as' => 'wallpapers','uses' => 'MainController@papelTapiz'));
Route::get('/nuestraImagen', array('as' => 'nuestraImagen', function(){return View::make('sectNuestraImagen');}));

Route::get('/recetas-de-cafe',array('as' => 'recetas-de-cafe',function(){
	return MainController::recetas();
}));

Route::get('/copa-america-chile-2015','MainController@copaAmerica');
Route::get('/copa-america-chile-2015',array('as' => 'copaamerica','uses' => 'MainController@copaAmerica'));

//Route::get('/megusta/{idReceta?}','MainController@megusta');

Route::post('/meGusta/{idPag}','MainController@megusta');

Route::get('/nuevaReceta', array('as' => 'nuevaReceta', function(){return View::make('nuevaReceta');}));
Route::get('/clubGranito', array('as' => 'clubGranito', function(){return View::make('sectClubGranito');}));
Route::get('/politica', array('as' => 'politica', function(){return View::make('politica');}));
Route::get('/terminos', array('as' => 'terminos', function(){return View::make('terminos');}));
Route::get('/produccion', array('as' => 'produccion', function(){return View::make('mantenimiento');}));

Route::get('/recetas-de-cafe/{slug?}','MainController@accionReceta');

Route::post('/contactoF','MainController@accionContacto');

Route::post('/produccionF','MainController@accionProduccion');

Route::post('/recetas-de-cafe/comentario','MainController@comentario');


Route::get('/version', function (){
$laravel = app();
$version = $laravel::VERSION;

echo $version;
});

// PANEL DE CONTROL

Route::post('/login','MainController@login') ;

/*Route::get('/controles',function(){
	return View::make('controles');
});*/


Route::get('/recetas-nueva', array('before' => 'auth','as' => 'recetas-nueva', function(){return View::make('controlnuevareceta');}));
Route::get('/controlindex', array('before' => 'auth','as' => 'controlindex', function(){return View::make('controlindex');}));
Route::get('/salir', array('before' => 'auth','as' => 'salir', function(){

	Auth::logout();
	return View::make('controles');

}));

Route::post('/registro','MainController@registro');

Route::get('/controlindex', ['before' => 'auth', function() {

	return View::make('controlindex');

 }]);
Route::post('/salir',['before' => 'auth', function() {

	Auth::logout();
	return View::make('controles');

}]);
