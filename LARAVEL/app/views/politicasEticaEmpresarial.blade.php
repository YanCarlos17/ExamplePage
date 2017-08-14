@extends('index')

@section('titulo')

    <title>Pol&iacute;ticas de Ética Empresarial y Anti soborno  de Caf&eacute; Aguila Roja</title>
    <style>
        strong{
            color:#5f5f5f !important;
        }
    </style>
@stop

@section('descripcion')
    <meta name="description" content="Descripci&oacute;n de las pol&iacute;ticas de privacidad de caf&eacute; Aguila Roja">
@stop

@section('head')
    <!-- Development Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- Development Google Fonts -->
@stop

@section('body')
    <!-- SUB-HEADER area -->
    <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(img/banner-contacto.png);">
        <div class="pm-sub-header-title-container">
            <p class="pm-sub-header-title post"
                style="text-transform:uppercase">Pol&iacute;ticas de Ética Empresarial y Anti soborno</p>
        </div>
    </div>

    <div class="container pm-containerPadding80">
        <div class="row">
            <div class="col-sm-12">
                <embed src="http://cafeaguilaroja.com/pdf/politicas-etica-anticorrupcion.pdf" 
                    style="width:100%;height:100vh;">
            </div>
        </div>
    </div>
@stop

