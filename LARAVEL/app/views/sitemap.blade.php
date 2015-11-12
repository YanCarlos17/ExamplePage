@extends('index')



@section('titulo')

	<title>Mapa del sitio | Caf&eacute; Aguila Roja</title>

@stop

@section('descripcion')

	<meta name="description" content="Mapa del sitio Aguila Roja">

@stop

@section('head')

@stop



@section('body')
		
		<!-- SUB-HEADER area -->

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(img/recetas/CabezoteRecetas-1920x340.png);">

        	

            <div class="pm-sub-header-title-container">

            	<p class="pm-sub-header-title"><span>Sitemap</span></p>

            </div>

            

        </div>

        <!-- SUB-HEADER area end -->

		<h1 class="h1sitemap">Mapa del sitio</h1>
		<div class="contenedor_sitemap">
		<table>

			<tr>

				<td>

					<ul>

						<li><a href="{{URL::route('index')}}">Caf&eacute; Aguila Roja</a></li>

						<li><a href="{{URL::route('quienesSomos')}}">Qui&eacute;nes Somos</a>
							<ul>
								<li><a href="{{URL::route('nuestraImagen')}}">Nuestra Imagen</a></li>

								<li><a href="{{URL::route('proceso-de-produccion-del-cafe')}}">Proceso de producci&oacute;n del caf&eacute;</a></li>
								
								<li><a href="{{URL::route('cafe-aguila-roja-en-colombia')}}">Caf&eacute; &aacute;guila roja en Colombia</a></li>

							</ul>

						</li>

						<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/">Nuestros Productos</a>

							<ul>
								<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Tostado-y-Molido">Caf&eacute; Tostado y molido</a>
									<ul>
										<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Tostado-y-Molido/Supremo-Tostado-y-Molido">Supremo tostado y molido</a></li>
										<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Tostado-y-Molido/Tostado-y-Molido-Descafeinado">Tostado y molido descafeinado</a></li>

									</ul>
								</li>
								<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Soluble-Instantaneo">Soluble instantaneo</a>
									<ul>
										<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Soluble-Instantaneo/Soluble-Descafeinado">Soluble descafeinado</a></li>
										<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Soluble-Instantaneo/Soluble-Instantane">Soluble instantaneo</a></li>
										<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Soluble-Instantaneo/Soluble-Granulado">Soluble granulado</a></li>
									</ul>
								</li>
								<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Tostado-Tradicional-Grano">Tostado tradicional grano</a>
									<ul>
										<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Tostado-Tradicional-Grano/Gourmet-grano-tostado">Gourmet grano tostado</a></li>
										<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/Tostado-Tradicional-Grano/Supremo-Grano-Tostado">Supremo grano tostado</a></li>
									</ul>
								</li>
								<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/confites">Confites</a></li>

							</ul>

						</li>

						<li><a href="{{URL::route('recetas-de-cafe')}}">Recetas de Caf&eacute;</a>

							<ul>
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/COPA-4-ESTACIONES">COPA 4 ESTACIONES</a></li>	
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/MALTEADA-DE-CAF%C3%89">MALTEADA DE CAF&Eacute;</a></li>	
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/CAF%C3%89-FRAPPUCCINO">CAF&Eacute; FRAPPUCCINO</a></li>	
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/CAF%C3%89-DU-MATIN">CAF&Eacute; "DU MATIN"</a></li>
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/CAF%C3%89-ESCOC%C3%89S">CAF&Eacute; ESCOC&Eacute;S</a></li>
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/CAF%C3%89-DAN%C3%89S">CAF&Eacute; DAN&Eacute;S</a></li>
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/MOUSE-DE-CAF%C3%89">MOUSE DE CAF&Eacute;</a></li>
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/CAF%C3%89-REFRESCANTE">CAF&Eacute; REFRESCANTE</a></li>
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/CAF%C3%89-MIX">CAF&Eacute; MIX</a></li>
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/CAF%C3%89-MOKA">CAF&Eacute; MOKA</a></li>
								<li><a href="http://cafeaguilaroja.com/recetas-de-cafe/CAF%C3%89-CAPUCCINO">CAF&Eacute; CAPUCCINO</a></li>
							</ul>

						</li>

						<li><a href="{{URL::route('clubGranito')}}">Club Granito</a></li>
						
						<li><a href="{{URL::route('wallpapers')}}">Wallpapers</a></li>

						<li><a href="{{URL::route('contacto')}}">Cont&aacute;cto</a></li>

						<li><a href="{{URL::route('produccion')}}">Apoyo Promocional</a></li>

						<li><a href="{{URL::route('politica')}}">Pol&iacute;ticas de privacidad</a></li>

						<li><a href="{{URL::route('terminos')}}">T&eacute;rminos y Condiciones</a></li>

						<li><a href="{{URL::route('copaamerica')}}">Fotos de la Copa Am&eacute;rica Chile 2015</a></li>
					</ul>

				</td>

				
			</tr>

		</table>
	</div>

@stop