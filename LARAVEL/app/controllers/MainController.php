<?php
date_default_timezone_set("America/Bogota"); 
class MainController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('sectIndex');
	}

	public function quienesSomos(){
		return View::make('sectQuienesSomos');
	}
	
	public function contacto(){
		return View::make('sectContacto');
	}
	public function papelTapiz(){
		return View::make('sectPapelTapiz');
	}
	public function nuestraImagen(){
		return View::make('sectNuestraImagen');
		//return View::make('mantenimiento'); 
	}
	
	public static function recetas(){

		//$arr_recetas = Entrada::all();
		//return View::make('sectRecetas')->with('arr_recetas', $arr_recetas); 
		//return View::make('sectRecetas', array('arr_recetas' => "1"));
		
		//$arr_recetas = Entrada::orderBy('FECHA_ENTRADA','Desc')->get();
		$arr_recetas = Entrada::orderBy('FECHA_ENTRADA','Desc')->paginate(5);
		return View::make('sectRecetas')->with('arr_recetas', $arr_recetas); 
	}
	
	public function copaAmerica(){

		return View::make('copaAmerica');

	}


	public function postReceta(){
		return View::make('postReceta');
	}
	public function Crud(){
		return View::make('Crud');
	}

	public function clubGranito(){
		return View::make('sectClubGranito');
		//return View::make('mantenimiento');
	}

	public function nuevaReceta(){

		return View::make('nuevaReceta');

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	public function login()
	{
		$datos=array(
		'NOMBRE_USUARIO' => Input::get('usuario'),
		'password' => Input::get('clave')

		);


    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos.
	    if (Auth::attempt($datos)){
	        return View::make('controlindex');;
	    }else{
	        return Redirect::to('controles')->with('mensaje_login', 'Ingreso invalido');
	    }
	}

public function registro(){

	/*			FORUMLARIO PARA REGISTRAR INCLUIR EN VISTA PARA UTILIZAR

								{{ Form::open(array('url' => 'registro')) }}

                                    {{ Form::label('nombre', 'Nombre'); }}
                                    {{ Form::text('nombre'); }}
                                    {{ Form::label('correo', 'Correo'); }}
                                    {{ Form::text('correo'); }}
                                    {{ Form::label('password', 'Clave'); }}
                                    {{ Form::password('password'); }}
                                    {{ Form::submit('Registrar'); }}

                                {{ Form::close() }}


	*/




	$usuario= new Usuario;
	 	
	 	$usuario->NOMBRE_USUARIO = Input::get('nombre');
	 	$usuario->_EMAIL_USUARIO	 = Input::get('correo');
	 	$usuario->password = Hash::make(Input::get('password'));
	 	$usuario->save();
		return Redirect::route('recetas-nueva');


}


	public function accionContacto(){

		$data=array(
		"nombre"=>Input::get('nombre'),
		"mensaje"=> Input::get('mensaje'),
  		"email" => Input::get('email'),
		"ip" => Request::getClientIp(),
  		"asunto" => Input::get('asunto'),
  		"telefono" => Input::get('telefono'),
  		"direccion" => Input::get('direccion'),
  		"pais" => Input::get('pais'),
  		"departamento" => Input::get('departamento')  		
  		);

		$reglas = array('captcha' => array('required','captcha'));
		$validacion = Validator::make(Input::all(), $reglas);
		
		if($validacion->fails()){
			return Redirect::route('contacto')->with('errorcaptcha', $data); 

		}
		else{
			Mail::send('mailing2', $data, function($message)
			{
				
				if(Input::get('asunto') == 'Solicitud Empleo'){

					$message->to('rhumanos@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
					$message->to('nomina@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));

				}
				else if(Input::get('asunto') == 'Quejas / Servicio'){
					$message->to('mercadeoaguila@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
				}
				else if(Input::get('asunto') == 'Quejas / Producto'){
					$message->to('calidad@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
					$message->to('calidad2@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));					
				}
				else if(Input::get('asunto') == 'Solicitud / Servicio'){
					$message->to('mercadeoaguila@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
					$message->to('publicidad@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
				}
				else if(Input::get('asunto') == 'Comercio Exterior - Importaciones / Exportaciones'){
					$message->to('gerencia@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
				}
				else if(Input::get('asunto') == 'Patrocinios'){
					$message->to('mercadeoaguila@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
				}
				else if(Input::get('asunto') == 'Sugerencias'){
					$message->to('contacto@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
					$message->to('-karias@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
				}
				else{
					$message->to('contacto@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
					$message->to('karias@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));

				}

		   		$message->to('contacto@cafeaguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
				$message->to('karin.arias@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
			
				$message->from('contacto@cafeaguilaroja.com', Input::get('nombre'));
			});
	
  				return Redirect::route('contacto')->with('mensaje', 'Su mensaje ha sido enviado');
		}
  		
	}

	public function accionContactoViejo(){
		$data=array(
		"nombre"=>Input::get('nombre'),
		"mensaje"=> Input::get('mensaje'),
  		"email" => Input::get('email'),
		"ip" => Request::getClientIp(),
  		"asunto" => Input::get('asunto')
  		);
  		Mail::send('mailing', $data, function($message)
		{
		    $message->to('contacto@cafeaguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
		    $message->to('contacto@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
			$message->to('karin.arias@aguilaroja.com', 'Contacto')->subject(Input::get('asunto'));
			
			$message->from('contacto@cafeaguilaroja.com', Input::get('nombre'));
		});

  		return Redirect::route('contacto')->with('mensaje', 'Su mensaje ha sido enviado');
			
	}

	public function accionProduccion(){

		$data=array(
		"degustacion"=>Input::get('degustacion'),
		"uniformes"=> Input::get('uniformes'),
  		"trofeosMedallas" => Input::get('trofeosMedallas'),
  		"obsequios" => Input::get('obsequios'),
  		"club"=>Input::get('club'),
		"apoyoEconomico"=> Input::get('apoyoEconomico'),
  		"publicidad" => Input::get('publicidad'),
  		"otros"=>Input::get('otros'),

		"fecha"=> Input::get('fecha'),
  		"lugar" => Input::get('lugar'),
  		"hora" => Input::get('hora'),
  		"asistentes" => Input::get('asistentes'),
  		"descripcion"=>Input::get('descripcion'),
		"responsable"=> Input::get('responsable'),
  		"telefono" => Input::get('telefono'),
  		"celular"=>Input::get('celular'),
		"correo"=> Input::get('correo')
  		);
  		Mail::send('produccionMailing', $data, function($message)
		{
		    $message->to('contacto.aguilaroja@gmail.com', 'Contacto')->subject(Input::get('asunto'));//
		     $message->from('contacto.aguilaroja@gmail.com', Input::get('nombre'));
		     return View::make('procesoProduccion');
		});

  		 return View::make('procesoProduccion');
	}

	public function accionReceta($slug=null){
		$tReceta=Entrada::where('slug', '=', $slug)->get();
		$coments= Comentario::where('ENTRADA_ID', '=', $tReceta[0]->ID_ENTRADA)->orderBy('fecha','Desc')->paginate(5);
		$resultado = Entrada::orderBy('FECHA_ENTRADA','Desc')->take(3)->get();
		return View::make('/postReceta', array('tReceta' => $tReceta[0], 'ultimasRecetas' => $resultado, 'coments' => $coments));
	}


	public function pruebas($idReceta=null){

		//$tReceta=receta::find($idReceta);
		$tReceta=Entrada::find($idReceta);
		$coments= Comentario::where('ENTRADA_ID', '=', $idReceta)->paginate(5);
		/* $resultado = DB::table('entradas')->orderBy('FECHA_ENTRADA','Desc')->take(3)->get(); */
		$resultado = Entrada::orderBy('FECHA_ENTRADA','Desc')->take(3)->get();

		return View::make('/pruebas', array('tReceta' => $tReceta, 'ultimasRecetas' => $resultado, 'coments' => $coments));

	}


	public function megusta($idReceta=null){
		$megusta = new Megusta;
		$megusta->ENTRADA_ID=$idReceta;
		$megusta->ID_USUARIO="1";
		$megusta->save();
		$muestra=Megusta::where('ENTRADA_ID','=',$idReceta)->count();
		echo $muestra;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function comentario($idPag=null){

		$data=array(
		"nombre"=>Input::get('nombre'),
		"mensaje"=> Input::get('comentario'),
  		"email" => Input::get('email'),
		
  		);

		$reglas = array('captcha' => array('required','captcha'));
		$validacion = Validator::make(Input::all(), $reglas);
		
		if($validacion->fails()){
			return Redirect::back()->with('errorcaptcha', $data); 

		}
		else{

		$ip =Request::getClientIp();
		$nombre=Input::get('nombre');
		$comentario=Input::get('comentario');
		$email=Input::get('email');
		$entrada=Input::get('entrada');
		$slug=Input::get('slug');
		$comment= new Comentario;
		$comment->ENTRADA_ID=$entrada;
		$comment->ID_USUARIO="1";
		$comment->autor=$nombre;
		$comment->TEXTO_COMENTARIO=$comentario;
		$comment->email=$email;
		$comment->ip=$ip;

		$comment->save();

		return Redirect::to('/recetas-de-cafe/'.$slug);
		}
	}

	public function store()
	{
		$fotogrande=Input::file('imgGrande');
		$fotopequena=Input::file('imgPequena');
		$destino='Uploads';
		$nombre=$fotogrande->getClientOriginalName();
		$nombre2=$fotopequena->getClientOriginalName();
		$fechita=round(microtime(true) * 1000);
		$nombrefinal1=$fechita.$nombre;
		$nombrefinal2=$fechita.$nombre2;
		$subida=Input::file('imgGrande')->move($destino, $nombrefinal1);
		$subida2=Input::file('imgPequena')->move($destino, $nombrefinal2);

	 	$receta= new Entrada;
	 	$receta->ID_USUARIO = "1";
	 	$receta->NOMBRE_ENTRADA = Input::get('nombre');
	 	$receta->CANTIDADPERSONAS_ENTRADA = Input::get('npersonas');
	 	$receta->DESCRIPCIONCORTA_ENTRADA= Input::get('descorta');
	 	$receta->DESCRIPCIONLARGA_ENTRADA = Input::get('descr');
		$receta->slug =Input::get('slug');
	 	$receta->FOTO1_ENTRADA=$nombrefinal1;
	 	$receta->FOTO2_ENTRADA=$nombrefinal2;
	 	$receta->save();
		return Redirect::route('recetas-nueva');
	}

	public function getCrud()
	{
		$receta = Entrada::orderBy('id','DESC')->get();

		return View::make('Crud')->with('recetas',$receta);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id = null)
	{
			
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}