@extends('index')



@section('titulo')

	<title>Nuestras Recetas de caf&eacute;</title>

@stop

@section('descripcion')

	<meta name="description" content="C&oacute;mo preparar deliciosas recetas con Caf&eacute; &Aacute;guila Roja, encuentra exquisitas recetas, c&oacute;mo preparar un capuchino, espresso, latte, bebidas calientes, fr&iacute;as.">
	
@stop

@section('head')

	 <!-- PrettyPhoto -->

    <link rel="stylesheet" type="text/css" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" />

    <!-- PrettyPhoto -->


@stop



@section('body')

	<!-- SUB-HEADER area -->

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(img/recetas/cabezote-recetas.jpg);">

        	

            <div class="pm-sub-header-title-container">

            	<p class="pm-sub-header-title"><span>RECETAS</span></p>

            </div>

            

        </div>

        

        <!-- SUB-HEADER area end -->

        

        <!-- BODY CONTENT starts here -->

        

        <div class="container pm-containerPadding80">

        	<div class="row">

		{{$arr_recetas->links()}}
		
		<div class="col-lg-12 pm-column-spacing">

                    

                    <article>

                    

                        <div class="pm-news-post-container">

                        

                            <a href="Uploads/buen-cafe-full.jpg" rel="prettyPhoto" ><div class="pm-news-post-image" style="background-image:url('Uploads/buen-cafe-1128x240.jpg')">

                                <div class="pm-news-post-title full-width">

                                    <h2>Secretos para un buen Caf&eacute; - Caf&eacute; Aguila Roja te acompa&ntilde;a con cari&ntilde;o</h2>

                                </div>

                            </div></a>

                            

                            <div class="pm-news-post-meta-container">
				<?php setlocale (LC_TIME, "es_ES"); ?>
                                <div class="pm-news-post-date">
					<img src="img/granino.png">
					<p style="text-align:left;">sin fronteras sin barreras &iexcl;Prep&aacute;ralo como quieras!</p>

                                </div>

                                <ul class="pm-meta-options-list">

                                </ul>

                            </div>

                            

                            <div class="pm-news-post-desc-container full-width">

                                <p class="pm-news-post-excerpt"><b>-</b> Utilice agua de garraf&oacute;n o filtro para obtener mejores resultados.<br>
<b>-</b> Caliente el agua, hasta el punto de ebullici&oacute;n aproximadamente 100 &#186;C, prepare la cantidad que desee, para una taza ponga de 5 a 7 gramos (una cucharada sopera) de Caf&eacute; Aguila Roja.<br>
<b>-</b> Debe apagar inmediatamente el fuego, el caf&eacute; nunca debe hervir porque adquiere un sabor desagradable.<br>
<b>-</b> T&oacute;melo caliente, despu&eacute;s de dejarlo reposar unos minutos.<br>
<b>-</b> Si le queda caf&eacute; de su preparaci&oacute;n no lo deseche, refrig&eacute;relo pues con el puede preparar deliciosas bebidas como frappuccino, malteadas o simplemente disfr&uacute;telo fr&iacute;o.<br></a></p>

                            </div>

                            

                        </div>

                    

                    </article>

                                        

                </div>


                @foreach ($arr_recetas as $receta)



                <div class="col-lg-12 pm-column-spacing">

                    

                    <article>

                    

                        <div class="pm-news-post-container">

                        

                            <div class="pm-news-post-image" style="background-image:url('Uploads/{{$receta->FOTO1_ENTRADA}}')">

                                <div class="pm-news-post-title full-width">

                                    <h2>{{$receta->NOMBRE_ENTRADA}}</h2>

                                </div>

                            </div>

                            

                            <div class="pm-news-post-meta-container">
				<?php setlocale (LC_TIME, "es_ES"); ?>
                                <div class="pm-news-post-date">
                                    <p class="day">{{Carbon::parse($receta->FECHA_ENTRADA)->format('j')}}</p>

                                    <p class="month-year">{{Carbon::parse($receta->FECHA_ENTRADA)->formatLocalized('%B')}}<br/>{{Carbon::parse($receta->FECHA_ENTRADA)->format('Y')}}</p>

                                </div>

                                <ul class="pm-meta-options-list">

                                    <li><i class="fa fa-comment"></i> &nbsp;{{$receta->comentario->count()}} Comentarios</li>

                                    <li><i class="fa fa-heart"></i> &nbsp;{{$receta->megusta->count()}} Me gusta</a></li>

                                    <li><i class="fa fa-pencil"></i> &nbsp;{{ HTML::linkAction('MainController@accionReceta', 'Comentar',array($receta->slug)) }}</li>

                                </ul>

                            </div>

                            

                            <div class="pm-news-post-desc-container full-width">

                                

                                <p class="pm-news-post-excerpt">{{$receta->DESCRIPCIONCORTA_ENTRADA}}</a></p>

                                <p class="pm-news-post-continue">{{ HTML::linkAction('MainController@accionReceta', 'Continuar leyendo',array($receta->slug)) }}</p>

                                

                            </div>

                            

                        </div>

                    

                    </article>

                                        

                </div>

                @endforeach

                {{$arr_recetas->links()}}

                <!-- News post end -->

            </div>

        </div>

    

@stop