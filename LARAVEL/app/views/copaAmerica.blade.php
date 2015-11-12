@extends('index')



@section('titulo')



	<title>Fotos de la copa Am&eacute;rica - Caf&eacute; Aguila Roja</title>



@stop



@section('descripcion')

    <meta name="description" content="las fotos de la copa am&eacute;rica chile 2015 caf&eacute; Aguila Roja">

@stop



@section('head')



    <!-- Development Google Fonts -->



    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>



    <!-- Development Google Fonts -->

    <link rel="stylesheet" href="{{asset('widget-flickr-2/vendor/Gallery-2.15.0/css/blueimp-gallery.min.css')}}">

    <link rel="stylesheet" href="{{asset('widget-flickr-2/vendor/Bootstrap-Image-Gallery-3.1.0/css/bootstrap-image-gallery.min.css')}}">

@stop







@section('body')



	 <!-- SUB-HEADER area -->



        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(img/copa-america/SLIDER-COPA-AMERICA.jpg);background-position: 50% -32px;">

        	

            <div class="pm-sub-header-title-container">



            	<p class="pm-sub-header-title"><span>Fotos Copa Am&eacute;rica 2015</span></p>



            </div>



        </div>



        <!-- SUB-HEADER area end -->



		<!-- Gallery filter system -->



        <div class="container pm-containerPadding-top-80">

        	<div class="row">

               



                <div class="col-lg-12">
	
                    <section class="contenedor-gallery">
			
			<a href="{{URL::route('calendario-copa-america-chile-2015')}}" class="pm-rounded-btn animated pm-primary" style="text-align:center;">Calendario Copa Am&eacute;rica Chile 2015<i class="fa fa-angle-right"></i></a>


                        <!-- Gallery thumbnails -->

        <div class="gallery">

            <div class="row">

                <div class="col-xs-12 spinner-wrapper">

                    <div class="spinner"></div>

                </div>

                <div class="gallery-container"></div>

            </div>

        </div>



        <!-- Blueimp gallery -->

        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">

            <div class="slides"></div>

            <h3 class="title"></h3>

            <a class="prev">‹</a>

            <a class="next">›</a>

            <a class="close">×</a>

            <a class="play-pause"></a>

            <ol class="indicator"></ol>

            <div class="modal fade">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <button type="button" class="close" aria-hidden="true">&times;</button>

                            <h4 class="modal-title"></h4>

                        </div>

                        <div class="modal-body next"></div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-default pull-left prev">

                                <i class="glyphicon glyphicon-chevron-left"></i>

                                Previous

                            </button>

                            <button type="button" class="btn btn-primary next">

                                Next

                                <i class="glyphicon glyphicon-chevron-right"></i>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>



                    </section>

                </div>



            </div>

        </div>



	 

@stop



@section('footer')

	<script src="{{asset('widget-flickr-2/vendor/jquery-1.11.1.min.js')}}"></script>

    <script src="{{asset('widget-flickr-2/vendor/imagesloaded.pkgd.min.js')}}"></script>

    <script src="{{asset('widget-flickr-2/vendor/Gallery-2.15.0/js/jquery.blueimp-gallery.min.js')}}"></script>

    <script src="{{asset('widget-flickr-2/vendor/Bootstrap-Image-Gallery-3.1.0/js/bootstrap-image-gallery.min.js')}}"></script>



    <script src="{{asset('widget-flickr-2/js/flickr-jquery.js')}}"></script>


    <script type="text/javascript">

        $(function() {

            

            // Set blueimp gallery options.

            $.extend(blueimp.Gallery.prototype.options, {

                useBootstrapModal: false,

                hidePageScrollbars: false

            });



            // Engage gallery.

            $('.gallery').flickr({

                apiKey: '55e911d5d6dd58b848492c9d45438e66',

                photosetId: '72157652183962253'

            });

        });

        </script>

        

@stop