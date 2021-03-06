@extends('index') @section('titulo')

<title>Caf&eacute; Aguila Roja&reg; - Tom&eacute;monos un tinto seamos amigos </title>

@stop @section('descripcion')
<meta name="description" content="En Caf&eacute; &Aacute;guila Roja producimos el caf&eacute; de los colombianos, inicia tu d&iacute;a con caf&eacute; de Colombia, conoce nuestro portafolio de productos Caf&eacute; &Aacute;guila Roja"> @stop @section('body')

<!-- /Main navigation -->
<!-- SLIDER AREA -->
<div class="pm-pulse-container" id="pm-pulse-container">
    <div id="pm-slider" class="pm-slider">
        <div id="pm-slider-progress-bar"></div>
        <ul class="pm-slides-container" id="pm_slides_container">
            <li data-thumb="img/slider/concurso-navidad-aguila-roja-miniatura.jpg" class="pmslide_0 pmslide">
                <img src="img/slider/concurso-navidad-aguila-roja.jpg" alt="Corcurso Navidad Caf&eacute; Aguila Roja" />
                <div class="pm-holder botones-slider">
                    <div class="pm-caption">
                        <a href="{{ route('terminos-concurso-navidad') }}">
                            <p class="animated bounce" style="margin: 6% auto 0; max-width: 200px; height: 50px; line-height: 50px;color: #FFF; background-color: #FF6C05; text-align: center; padding-left: 10px; padding-right: 10px; text-transform: uppercase; font-family: 'Open sans'; font-size: 12px; font-weight: 700; border-radius: 4px;">Términos y condiciones</p>
                        </a>
                    </div>
                </div>
            </li>
            <li data-thumb="img/slider/cafe-aguila-roja-productos-miniatura.jpg" class="pmslide_1 pmslide">
                <img src="img/slider/cafe-aguila-roja-productos.jpg" alt="Productos de Caf&eacute; Aguila Roja" />
            </li> 
            <!--li data-thumb="img/slider/concurso-halloween-aguila-roja-miniatura.jpg" class="pmslide_1 pmslide">
                <img src="img/slider/concurso-halloween-aguila-roja.jpg" alt="Corcurso Halloween Caf&eacute; Aguila Roja" />
                <div class="pm-holder botones-slider">
                    <div class="pm-caption">
                        <a href="{{ route('terminos-concurso-halloween') }}">
                            <p class="animated bounce" style="margin: 6% auto 0; max-width: 200px; height: 50px; line-height: 50px;color: #FFF; background-color: #FF6C05; text-align: center; padding-left: 10px; padding-right: 10px; text-transform: uppercase; font-family: 'Open sans'; font-size: 12px; font-weight: 700; border-radius: 4px;">Términos y condiciones</p>
                        </a>
                    </div>
                </div>
            </li-->
            <!--li data-thumb="img/slider/cafe-aguila-roja-halloween-miniatura.jpg" class="pmslide_2 pmslide">
                <img src="img/slider/cafe-aguila-roja-halloween.jpg" alt="Caf&eacute; Aguila Roja Halloween" />
            </li-->
            <li data-thumb="img/slider/cafe-aguila-roja-redes-sociales-miniatura.jpg" class="pmslide_2 pmslide">
                <img src="img/slider/cafe-aguila-roja-redes-sociales.jpg" alt="Caf&eacute; Aguila Roja Redes Sociales" />
            </li>
            <li data-thumb="img/slider/aplicacion-cafe-aguila-roja-miniatura.jpg" class="pmslide_3 pmslide">
                <img src="img/slider/aplicacion-cafe-aguila-roja.jpg" alt="Aplicaci&oacute;n Graninostickers Aguila Roja"/>
            </li>
        </ul>
    </div>
</div>
<!-- SLIDER AREA end -->
<!-- BODY CONTENT starts here -->
<!-- Overview boxes -->

<div class="container pm-containerPadding-top-90">

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">
            <h3>RECETAS DE CAFÉ</h3>
            <div class="pm-image-container">
                <a href="{{URL::route('recetas-de-cafe')}}"><img src="img/home/Recetas de caf&eacute; aguila roja.jpg" alt="Recetas de caf&eacute; aguila roja" /></a>
            </div>
            <p>Lo invitamos a innovar, crear y degustar utilizando nuestro exquisito café Aguila Roja.</p>

            <a href="{{URL::route('recetas-de-cafe')}}" class="pm-rounded-btn animated pm-primary">VER RECETAS<i class="fa fa-angle-right"></i></a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">
            <h3>CLUB AMIGOS DEL GRANINO</h3>
            <div class="pm-image-container">
                <a href="{{URL::route('clubGranito')}}"><img src="{{asset('img/home/club-amiguitos-del-granito.jpg')}}" alt="Club Amiguitos del Granino Caf&eacute; Aguila Roja"
                    /></a>
            </div>

            <p> &Uacute;nete al Club Amigos del granito y divi&eacute;rtete jugando con este personaje</p>

            <a href="{{URL::route('clubGranito')}}" class="pm-rounded-btn animated pm-primary">Club del Granino<i class="fa fa-angle-right"></i></a>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">

            <h3>NUEVA APP GRANINOSTICKERS</h3>
            <div class="pm-image-container">
                <style>
                    .slider ul {
                        list-type: none !important;
                        list-style: none !important;
                        padding: 0 !important;
                        margin: 0 !important;
                        width: 100%;
                    }

                    .slider ul li:before {
                        display: none;
                        content: ""!important;
                    }

                    .slider ul li img {
                        width: 100%;
                    }

                    .slider {
                        width: 100%;
                    }
                </style>
                <!--<img src="img/home/aplicacion-graninostickers.gif" alt="Aplicaci&oacute;n graninostickers">-->
                <div class="slider">
                    <ul id="slider1">
                        <li><img border="0" src="img/descargar-aplicacion-graninostickers.jpg" alt="Descargar la aplicaci&oacute;n graninostickers"
                            /></li>
                        <li><img border="0" src="img/descargar-app-graninostickers.jpg" alt="aplicaci&oacute;n graninostickers"
                            /></li>
                    </ul>
                </div>
            </div>
            <p>Descarga la aplicación del granito y envía emoticones a tus amigos.</p>
            <a id="buttoandroid" href="https://play.google.com/store/apps/details?id=com.xigna.cafeaguilaroja&hl=es" rel="nofollow" target="_blank"><img src="img/boton-app-descargar--google-play.png" /></a>
            <a id="buttonios" href="https://itunes.apple.com/us/app/id958663497?mt=8" rel="nofollow" target="_blank"><img src="img/boton-app-descargar-apple.png" /></a>
        </div>
    </div>

</div>

<!-- Overview boxes end -->

<!-- Menu filter system -->

<div class="container pm-containerPadding-top-50 pm-containerPadding-bottom-10">
    <div class="row">
        <div class="col-lg-12 pm-containerPadding-bottom-40">
            <div class="pm-featured-header-container">
                <!-- Featured panel header -->
                <div class="pm-featured-header-title-container menus">
                    <h2 class="pm-featured-header-title">RECETAS DE CAFÉ</h2>
                    <p class="pm-featured-header-message">Diferentes maneras de disfrutar un delicioso caf&eacute; Aguila Roja</p>
                </div>
                <!-- Featured panel header end -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
        <!-- menu item -->
        <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
            <div class="pm-menu-item-container">
                <div class="pm-menu-item-img-container" style="background-image:url(img/menu/capuccino-recetas.jpg);">
                </div>
                <div class="pm-menu-item-desc">
                    <h3>CAPUCCINO
                        <BR>INGREDIENTES (PARA 2 PERSONAS)</h3>
                    <p class="pm-menu-item-excerpt">Verter en la licuadora el café y la leche en polvo, batir por 30 segundos saborizar al gusto con una
                        pozca de cocoa, vainilla o licor (opcional); Sirvalo y disfrútelo inmediatamente. <br><a href="recetas-de-cafe/CAF&Eacute;-CAPUCCINO">Preparación de Café; Capuccino...</a></p>
                </div>
            </div>
        </div>
        <!-- /.col-lg-4 -->
        <!-- /menu item -->
        <!-- menu item -->
        <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
            <div class="pm-menu-item-container">
                <div class="pm-menu-item-img-container" style="background-image:url(img/menu/mocca-recetas.jpg);">
                </div>
                <div class="pm-menu-item-desc">
                    <h3>CAFÉ MOKA
                        <BR>INGREDIENTE (PARA 2 PERSONAS)</h3>
                    <p class="pm-menu-item-excerpt">Colocar el café recién preparado en cada taza. Licuar aparte la leche caliente (sin hervir) con el
                        chocolate y la leche en polvo. Adicionar la mezcla sobre el café; Sírvalo decorado con las gotas
                        de chocolate y disfrútelo inmediatamente. <br><a href="recetas-de-cafe/CAF&Eacute;-MOKA">Preparación de Café; MOKA...</a></p>
                </div>
            </div>
        </div>
        <!-- /.col-lg-4 -->
        <!-- /menu item -->
        <!-- menu item -->
        <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
            <div class="pm-menu-item-container">
                <div class="pm-menu-item-img-container" style="background-image:url(img/menu/mix-de-cafe-recetas-.jpg);">
                </div>
                <div class="pm-menu-item-desc">
                    <h3>CAFÉ MIX
                        <BR>INGREDIENTES (PARA 2 PERSONAS)</h3>
                    <p class="pm-menu-item-excerpt">Mezcle el ron, el jugo y el Café; Aguila Roja y vierta en una coctelera con cubos de hielo. Aparte,
                        vierta la leche de coco y la crema en un recipiente y bata hasta que se torne espumoso. Sirva la
                        primera mezcla en copas individuales y luego a&ntilde;ada la espuma. Roc&iacute;e con la cocoa en
                        polvo y disfr&uacute;telo inmediatamente.<br><a href="recetas-de-cafe/CAF&Eacute;-MIX">Preparaci&oacute;n de Caf&eacute; MIX...</a></p>
                </div>
            </div>
        </div>
        <!-- /.col-lg-4 -->
        <!-- /menu item -->
    </div>
</div>
<!-- Menu filter system end -->

@stop
@section('script')
@stop