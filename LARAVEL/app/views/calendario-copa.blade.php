@extends('index')



@section('titulo')



	<title>Calendario de la copa Am&eacute;rica - Caf&eacute; Aguila Roja</title>



@stop



@section('descripcion')

    <meta name="description" content="Calendario de la copa am&eacute;rica chile 2015 caf&eacute; Aguila Roja">

@stop



@section('head')



    <!-- Development Google Fonts -->



    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>



    <!-- Development Google Fonts -->

@stop







@section('body')



	 <!-- SUB-HEADER area -->



        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(img/copa-america/SLIDER-COPA-AMERICA.jpg);background-position: 50% -32px;">

        	

            <div class="pm-sub-header-title-container">



            	<p class="pm-sub-header-title"><span>Calendario Copa Am&eacute;rica 2015</span></p>



            </div>



        </div>



        <!-- SUB-HEADER area end -->



		<!-- Gallery filter system -->



        <div class="container pm-containerPadding-top-80">

        	<div class="row">

               



                <div class="col-lg-12">
			
			<section class="contenedor-calendario">
				<a href="{{asset('img/copa-america/Calendario-copa-america-.jpg')}}" download="Calendario-Copa-America-Chile-2015" target="_blank" class="pm-rounded-btn animated pm-primary" onClick="ga(['send', 'event', 'Descargas', 'click-descarga', 'Calendario-copa-america', 1 ]);">Descargar<i class="fa fa-angle-right"></i></a>

				<img src="{{asset('img/copa-america/Calendario-copa-america-.jpg')}}" />
			</section>
                    
                </div>



            </div>

        </div>



	 

@stop



@section('footer')


        

@stop