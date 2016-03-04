@extends('index')

@section('titulo')

	<title>Club Granito</title>

@stop

@section('descripcion')
    <meta name="description" content="Descarga gratis incre&iacute;bles wallpapers HD gratis del granito de caf&eacute; &Aacute;guila Roja, encuentra aqu&iacute; los m&aacute;s divertidos fondos de escritorio.">
@stop

@section('head')
 

    <!-- PrettyPhoto -->

    <link rel="stylesheet" type="text/css" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" />

    <!-- PrettyPhoto -->

    <!-- Development Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- Development Google Fonts -->

@stop

@section('body')

	 <!-- SUB-HEADER area -->

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(img/ClubGranito/Cabezote-club-de-amigos.png);background-position: 50% -32px;">

        </div>

        <!-- SUB-HEADER area end -->

        <!-- Gallery filter system -->

        <div class="container pm-containerPadding-top-80">
            <div class="row">
            
                <div class="col-lg-12 pm-containerPadding-bottom-40">
                    
                    <div class="pm-featured-header-container">
                        
                        <!-- Filter menu -->
                        <div class="pm-isotope-filter-container" style="  background: #FBF9ED;">
                            <ul class="pm-isotope-filter-system">
                                <li><a href="#ClubGranito" class="current" style="font-weight:bold; text-align:center;">Club amiguitos del granito</a></li>
                            </ul>
                        </div>
                       
                        <!-- Filter menu end -->
                    
                    </div>
                    
                </div><!-- /.col-lg-12 -->
                <!-- /.col-lg-4 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 pm-column-spacing">
                        
                            <img src="{{asset('img/ClubGranito/banner-juegos-club-granito-555x340px.png')}}" width="100%" height="340px;">
                            
                        </div><!-- /.col-lg-4 -->
                        <!-- gallery item -->



                        <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
                        
                            <div class="pm-gallery-item-container">
                                <div class="pm-gallery-item-img-container" style="background-image:url(img/ClubGranito/granino-skater.jpg);">
                                    <span></span>
                                    <div class="pm-gallery-item-img-quote">
                                        <p>Granino skater</p>
                                    </div>
                                    <div class="pm-gallery-item-img-read-more">
                                        <a href="juegos_swf/preloader.swf?width=640&height=480" rel="prettyPhoto[granino]" >Jugar</a>
                                    </div>
                                </div>
                                
                                <div class="pm-gallery-item-desc">
                                    <p class="pm-gallery-item-name">Granino skater</p>
                                                                
                                    <div class="pm-divider"></div>
                                    
                                    <ul class="pm-gallery-social-icons">
                                        <li><a href="juegos_swf/preloader.swf?width=640&height=480"  rel="prettyPhoto[granino1]" class="pm-rounded-btn pm-secondary small expand lightbox boton_jugar_clubgranito" style="padding: 10px 50px !important;">Jugar</a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div><!-- /.col-lg-4 -->
                        <!-- gallery item -->
                        <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing ">
                        
                            <div class="pm-gallery-item-container">
                                <div class="pm-gallery-item-img-container" style="background-image:url(img/ClubGranito/granino-defensor.jpg);">
                                    <span></span>
                                    <div class="pm-gallery-item-img-quote">
                                        <p>Granino defensor</p>
                                    </div>
                                    <div class="pm-gallery-item-img-read-more">
                                        <a href="juegos_swf/000-granito2.swf?width=640&height=480" rel="prettyPhoto[granino2]" >Jugar</a>
                                    </div>
                                </div>
                                
                                <div class="pm-gallery-item-desc">
                                    <p class="pm-gallery-item-name">Granino defensor</p>
                                                                
                                    <div class="pm-divider"></div>
                                    
                                    <ul class="pm-gallery-social-icons">
                                        <li><a href="juegos_swf/000-granito2.swf?width=640&height=480" rel="prettyPhoto[granino2]" class="pm-rounded-btn pm-secondary small expand lightbox boton_jugar_clubgranito" style="padding: 10px 50px !important;">Jugar</a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>

                    <div id="juego1" class="hide" style="display:none;"
                     <object type="application/x-shockwave-flash" width="640" height="480" data="{{asset('juegos_swf/000-granito2.swf')}}">

                      <param name="movie" value="{{asset('juegos_swf/000-granito2.swf')}}">

                    </object>
                    </div>


            </div>
    </div>
    
@stop