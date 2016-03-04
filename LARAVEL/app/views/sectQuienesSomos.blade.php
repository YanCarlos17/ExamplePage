@extends('index')

@section('titulo')

	<title>Qui&eacute;nes somos</title>

@stop

@section('descripcion')
    <meta name="description" content="Qui&eacute;nes  somos">
@stop

@section('head')


    <link href="css/aa/timeline.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <!-- Development Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- Development Google Fonts -->

@stop



@section('body')

        <!-- SUB-HEADER area -->

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0"  style="background-image: url(img/quienesSomos/Cabezote-quienesSomos.jpg);">

        	

            <div class="pm-sub-header-title-container">

            	<p class="pm-sub-header-title"><span>QUIÉNES SOMOS</span></p>

            </div>

            

        </div>

        

        <!-- SUB-HEADER area end -->

        

        <!-- BODY CONTENT starts here -->

        

        <div class="container pm-containerPadding-top-60">

        	<div class="row">

            

            	<div class="col-lg-12">

                	

                    <h2>Reseña Histórica</h2>

                    

                    <p>Iniciamos en 1930 con la apertura de un local situado en la Carrera 4 con Calle 11, frente a la Plaza de Caicedo de la ciudad de Cali, en 1939 de acuerdo a nuestro crecimiento 

y participación en el mercado se hace necesario el traslado de la organización a las nuevas instalaciones ubicadas en la Carrera 5 Nro. 21-48 del Barrio San Nicolás en Cali, 

caracterizándonos desde el inicio por la renovación tecnológica constante y el mejoramiento permanente de nuestros procesos productivos bajo los más altos estándares de 

calidad. En 1974, se inaugura la primera gran planta para la producción de café tostado y/o molido en el municipio de Candelaria (Valle), seguida 1994 con la construcción 

de una nueva planta en el municipio de MADRID en Cundinamarca y una tercera durante el año 2000 en el municipio de SANTANDER DE QUILICHAO en el Departamento del 

Cauca, bajo la razón social INDUSTRIA DE PRODUCTOS ALIMENTICIOS DEL CAUCA S.A. “IPAC S. A.” . </p>

                    <p class="titulo-carousel">En caf&eacute; &Aacute;guila Roja entregamos el coraz&oacute;n en cada producción de caf&eacute; para que miles de Colombianos respiren el aroma de la amistad</p>

                </div>

            

            </div>

        </div>

<script type="text/javascript">

$(window).load(function() {
    // light
    $('.tl3').timeline({
        openTriggerClass : '.read_more',
        startItem : '07/01/2015',
        closeText : 'x',
        itemMargin : 25,
        yearsOn : false,
        ajaxFailMessage: 'prueba'
    });
    $('.tl3').on('ajaxLoaded.timeline', function(e){
        var height = e.element.height()-60-e.element.find('h2').height();
        e.element.find('.timeline_open_content span').css('max-height', height).mCustomScrollbar({
            autoHideScrollbar:true,
            theme:"light-thin"
        }); 
    });
    
}); 


</script>
<style>
    .timeline_line {
        display:none;
    }
    .image_roll_zoom {
    display:inline-block;
    width:100%;
    height:355px;
    position:absolute;
    background:url(images/zoomIn.png) no-repeat center center;
}
.image_roll_glass {
    display:none;
    width:100%;
    height:355px;
    position:absolute;
    top:0;
    left:0;
    background:url('images/glass.png') repeat;
}
</style>
 <div class="container pm-containerPadding-top-30 pm-containerPadding-bottom-30">

            <div class="row">

                <div class="col-lg-12 pm-containerPadding-bottom-40">
                    <!-- BEGIN TIMELINE -->
            <div class="timelineFlat timelineFlatPortfolio tl3">
                    <div class="item" data-id="17/02/2015" data-description="9: Empaque">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/cafe-de-colombia-para-los-colombianos-expandible.jpg" rel="lightbox[timeline]">
                            <img src="img/quienesSomos/Carrusel/cafe-de-colombia-para-los-colombianos.jpg" alt="Empaque"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">Nos contagiamos del &aacute;nimo de un buen caf&eacute; &aacute;guila roja</p>
                    </div>

                    <div class="item" data-id="07/01/2015" data-description="2: Recepci&oacute;n de materia prima">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/talento-humano-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]">
                        <img src="img/quienesSomos/Carrusel/3-talento-humano-cafe-aguila-roja.jpg" alt="recepcion de cafe"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">CON MOTIVACI&Oacute;N AFRONTAMOS LOS RETOS DE CADA D&Iacute;A</p>
                    </div>

                    <div class="item" data-id="12/02/2015" data-description="8: Desgasificaci&oacute;n">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/trabajo-responsable-y-vocacion-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]"> 
                            <img src="img/quienesSomos/Carrusel/trabajo-responsable-y-vocacion-cafe-aguila-roja.jpg" alt="Desgasificacion"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">AL TRABAJO RESPONSABLE Y A LA VOCACI&Oacute;N DE SERVICIO</p>
                    </div>
                    
                    <div class="item" data-id="22/02/2015" data-description="10: Almacenamiento">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/trabajo-bien-hecho-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]">
                            <img src="img/quienesSomos/Carrusel/trabajo-bien-hecho-cafe-aguila-roja.jpg" alt="Almacenamiento"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">UNA VIDA ENTREGADA AL TRABAJO BIEN HECHO</p>
                    </div>

                    <div class="item" data-id="28/01/2015" data-description="5: Almacenamiento en silos">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/granito-de-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]">
                            <img src="img/quienesSomos/Carrusel/granito-de-cafe-aguila-roja.jpg" alt="almacenamiento en silos"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">EL GRANITO DE CAF&Eacute; VA DONDE SE ENCUENTRE UN BUEN AMIGO.</p>
                    </div>
                    
                    
                    <div class="item" data-id="02/02/2015" data-description="6: Tosti&oacute;n">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/llegamos-al-hogar-de-los-colombianos-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]">
                            <img src="img/quienesSomos/Carrusel/llegamos-al-hogar-de-los-colombianos-cafe-aguila-roja.jpg" alt="Tostion"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">DISTRIBUIMOS LA AMISTAD POR TODO COLOMBIA</p>
                    </div>
                    

                    <div class="item" data-id="07/02/2015" data-description="7: Molienda">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/nuestras-plantas-de-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]">
                            <img src="img/quienesSomos/Carrusel/nuestras-plantas-de-cafe-aguila-roja.jpg" alt="Molienda"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">NUNCA PARAMOS DE PRODUCIR EL CAF&Eacute; QUE HACE AMIGOS </p>
                    </div>
                    
                    <div class="item" data-id="28/02/2015" data-description="11: Despacho">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/mejorando-estandares-de-calidad-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]">
                            <img src="img/quienesSomos/Carrusel/mejorando-estandares-de-calidad-cafe-aguila-roja.jpg" alt="Despacho"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">PRODUCIMOS UN CAF&Eacute; DE CALIDAD CERTIFICADA</p>
                    </div>

                    <div class="item" data-id="21/01/2015" data-description="4: Selecci&oacute;n y limpieza">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/producto-de-colombianos-para-colombianos-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]">
                            <img src="img/quienesSomos/Carrusel/producto-de-colombianos-para-colombianos-cafe-aguila-roja.jpg" alt="seleccion y limpieza"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">UN PRODUCTO DE COLOMBIANOS PARA COLOMBIANOS</p>
                    </div>

                    <div class="item" data-id="01/03/2015" data-description="12: Recolecci&oacute;n">
                    <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/el-cafe-de-todos-los-dias-expandible.jpg" rel="lightbox[timeline]">    
                        <img src="img/quienesSomos/Carrusel/el-cafe-de-todos-los-dias.jpg" alt="recoleccion de cafe"/>
                    </a>
                    <p class="textoItem carousel-texto-quienessomos">UBICADOS EN EL CAMINO QUE DA LA BIENVENIDA A SANTIAGO DE CALI</p>
                    </div>

                    <div class="item" data-id="01/01/2015" data-description="1: Recolecci&oacute;n">
                        <a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="img/quienesSomos/Carrusel/expandible/sede-principal-cafe-aguila-roja-expandible.jpg" rel="lightbox[timeline]">
                        <img src="img/quienesSomos/Carrusel/14-sede-principal-cafe-aguila-roja.jpg" alt="recoleccion de cafe"/>
                        </a>
                        <p class="textoItem carousel-texto-quienessomos">PRODUCIMOS EL CAF&Eacute; DE COLOMBIA DESDE 1930</p>
                    </div>
                    
            </div> <!-- /END TIMELINE -->  
        </div>
    </div>
</div>

        <!-- Staff filter system -->

        <div class="container pm-containerPadding-top-60 pm-containerPadding-bottom-60">

        	<div class="row">

            

                <div class="col-lg-12 pm-containerPadding-bottom-40">

                	
                </div><!-- /.col-lg-12 -->

                

                <!-- staff item -->

                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">

                    <div class="pm-staff-item-container">

                    	<div class="pm-staff-item-img-container" style="background-image:url(img/quienesSomos/mision-aguila-roja.jpg);">

                        	<span></span>
                        </div>

                        

                        <div class="pm-staff-item-desc">

                        	<h3 class="pm-staff-item-name">MISIÓN</h3>

                            <div class="pm-divider"></div>

                            <p class="pm-staff-item-excerpt">Inspirados en fieles principios de función social, crecimiento 

personal y bienestar comunitario, abastecer el mercado 

nacional y/o internacional de café verde y/o procesado (tostado y molido y/o soluble y/o liofilizado) y/o derivados del caf&eacute; y/o afines y/o dem&aacute;s productos alimenticios, al amparo de los mas altos est&aacute;ndares de calidad y control, para satisfacer las expectativas del consumidor final y la cadena comercial.  Generando agregados de valor que permitan la viabilidad y estabilidad econ&oacute;mica y laboral presente y futura de la Gran Familia Torrecafe Aguila Roja.</p>

                            

                            <div class="pm-divider"></div>

                        </div>

                    </div>

                    

                </div><!-- /.col-lg-4 -->

                <!-- /staff item -->

                

                <!-- staff item -->

                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">

                    <div class="pm-staff-item-container">

                    	<div class="pm-staff-item-img-container" style="background-image:url(img/quienesSomos/vision-cafe-aguila-roja.jpg);">

                        	<span></span>

                        </div>

                        

                        <div class="pm-staff-item-desc">

                        	<h3 class="pm-staff-item-name">VISIÓN</h3>

                            
                            <div class="pm-divider"></div>

                            

                            <p class="pm-staff-item-excerpt">Con una Visi&oacute;n humanista y de respeto comunitario, hacer segura y viable la opci&oacute;n industrial de la Gran Familia Torrecafe Aguila Roja, creciendo vertical y horizontalmente en la participaci&oacute;n de la categor&iacute;a caf&eacute; y otros productos alimenticios, nacional e internacionalmente.</a> </p>

                            

                            <div class="pm-divider"></div>

                        </div>

                    </div>

                    

                </div><!-- /.col-lg-4 -->

                <!-- /staff item -->

                

                <!-- staff item -->

                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">

                    <div class="pm-staff-item-container">

                    	<div class="pm-staff-item-img-container" style="background-image:url(img/quienesSomos/politica-calidad.jpg);">

                        	<span></span>

                        </div>

                        

                        <div class="pm-staff-item-desc">

                        	<h3 class="pm-staff-item-name">POLÍTICA DE CALIDAD</h3>

                            <div class="pm-divider"></div>

                            

                            <p class="pm-staff-item-excerpt">TORRECAFE AGUILA ROJA & CIA. S.A. se compromete a satisfacer las necesidades 
Y expectativas de los clientes y consumidores amparados en el trabajo conjunto con proveedores y distribuidores, desarrollo del talento humano y tecnolog&iacute;a adecuada, para ofrecer productos que cumplan con los requisitos de calidad, legales y reglamentarios, mejorando continuamente la eficacia del Sistema de Gesti&oacute;n de Calidad para lograr la permanencia de una organizaci&oacute;n competitiva en el mercado.
</p>

                            

                            <div class="pm-divider"></div>

                        </div>

                    </div>

                    

                </div><!-- /.col-lg-4 -->

                <!-- /staff item -->

                

            </div>
	
		<div class="row">

            

            	<div class="col-lg-12 pm-containerPadding-bottom-40">

                    
                </div><!-- /.col-lg-12 -->

                	

                    <h2 style="padding-left:15px;">Valores</h2>

                    
                    
			<!-- staff item -->

                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">

                    <div class="pm-staff-item-container">
                        <div class="pm-staff-item-img-container" style="background-image:url(img/quienesSomos/Responsabilidad.jpg);">

                            <span></span>

                

                        </div>

                        <div class="pm-staff-item-desc">

                        	<h3 class="pm-staff-item-name">Responsabilidad</h3>

                            <div class="pm-divider"></div>

                            <p class="pm-staff-item-excerpt">En desarrollo del objeto social cada acto corporativo, deber&aacute; propender por la custodia del medio ambiente, la sana aplicaci&oacute;n de los principios de funci&oacute;n social que deba inspirar la empresa privada, el cuidado riguroso de los est&aacute;ndares de calidad a nivel de producci&oacute;n y comercializaci&oacute;n, el crecimiento personal del recurso humano y la satisfacci&oacute;n total del consumidor.</p>

                            <div class="pm-divider"></div>

                        </div>

                    </div>

                    

                </div><!-- /.col-lg-4 -->

                <!-- /staff item -->

		<!-- staff item -->

                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">

                    <div class="pm-staff-item-container">
                        <div class="pm-staff-item-img-container" style="background-image:url(img/quienesSomos/Honestidad.jpg);">

                            <span></span>

                        </div>

                        <div class="pm-staff-item-desc">

                        	<h3 class="pm-staff-item-name" >HONESTIDAD</h3>

                            <div class="pm-divider"></div>

                            

                            <p class="pm-staff-item-excerpt">Cada acto corporativo de Torrecaf&eacute; Aguila Roja & Cia. S.A., respetara integralmente los derechos adquiridos por todos los medios de la cadena productiva adem&aacute;s de atender los principios de justicia y equidad, m&aacute;s all&aacute; de los efectos deseados en desarrollo del objeto comercial.</p>

                            

                            <div class="pm-divider"></div>

                        </div>

                    </div>

                    

                </div><!-- /.col-lg-4 -->

                <!-- /staff item -->

		<!-- staff item -->

                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">

                    <div class="pm-staff-item-container">
                        <div class="pm-staff-item-img-container" style="background-image:url(img/quienesSomos/Servicio.jpg);">

                            <span></span>

                        </div>

                        <div class="pm-staff-item-desc">

                        	<h3 class="pm-staff-item-name">SERVICIO</h3>

                            <div class="pm-divider"></div>

                            

                            <p class="pm-staff-item-excerpt">Consultar las necesidades y grado de satisfacci&oacute;n de nuestra cadena productiva y sociedad, cuando desarrollamos nuestro objeto social, para generar un acercamiento eficaz entre la promesa empresarial y lo que se espera de Torrecaf&eacute; Aguila Roja & Cia. S.A.</p>

                            

                            <div class="pm-divider"></div>

                        </div>

                    </div>

                    

                </div><!-- /.col-lg-4 -->

                <!-- /staff item -->


			

                </div>

            

            </div>
		
        </div>

        <!-- Staff filter system end -->

        
	
        



@stop