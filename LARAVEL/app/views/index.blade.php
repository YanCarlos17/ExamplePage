<!DOCTYPE html>

<html lang="es">

  <head>
	@yield('titulo')
	@yield('descripcion')
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="alternate" hreflang="es" href="http://cafeaguilaroja.com/" />
    
    <meta name="author" content="xigna">

    <link rel="shortcut icon" href="{{asset('img/Logo-AguilaRoja-favicon.ico')}}"/>
    <link rel="apple-touch-icon" href="{{asset('img/Logo-AguilaRoja-apple.png')}}"/>

    

    @yield('head')

	<link rel="stylesheet" href="{{asset('css/allcss.css')}}">

  </head>



  <body>

	<!-- Mobile Menu -->

  <div class="pm-mobile-menu-overlay" id="pm-mobile-menu-overlay"></div>

  

  <div class="pm-mobile-global-menu">

                	

    <div class="pm-mobile-global-menu-logo">

        <a href="{{URL::route('index')}}"><img src="{{asset('img/logo-aguila-roja.png')}}" alt="Logo representativo Aguila Roja"></a> 

    </div>

            
    <ul class="sf-menu pm-nav">

							    <li>

                                    <a href="{{URL::route('quienesSomos')}}">QUIÉNES SOMOS</a>

                                        <ul>

                                            <li><a href="{{URL::route('nuestraImagen')}}">NUESTRA IMAGEN</a></li>
					
					    <li><a href="{{URL::route('proceso-de-produccion-del-cafe')}}">Proceso de producci&oacute;n</a></li>
					
					   <li><a href="{{URL::route('cafe-aguila-roja-en-colombia')}}">Caf&eacute; &Aacute;guila Roja en Colombia</a></li>


                                        </ul>



                                </li>

                                <li>

                                    <a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/">NUESTROS PRODUCTOS</a>
                                  
                                </li>

                                <li><a href="{{URL::route('recetas-de-cafe')}}">RECETAS</a></li>

                                <li>

                                	<a href="{{URL::route('clubGranito')}}">CLUB GRANINO</a>                                </li>

                                <li>

                                	<a href="{{URL::route('wallpapers')}}">WALLPAPERS</a>
                                </li>

                                <li>

                                	<a href="{{URL::route('contacto')}}">CONTACTO</a>
                                </li>
    
    </ul>

        

  </div><!-- /pm-mobile-nav-overlay -->

	<div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->

    	<!-- Sub-header -->

    	<div class="pm-sub-menu-container">

        

        	<div class="container">

            

            	<div class="row">

                	

                    <div class="col-lg-5 col-md-5 col-sm-6" id="menu-superior">

                    	

                        <div class="pm-sub-menu-info">

                        	<p class="pm-address"><i class="fa fa-map-marker"></i> KM. 10 Via Cali-Candelaria</p>

                            <p class="pm-contact"><i class="fa fa-mobile-phone"></i> 018000&nbsp;934777</p>

                        </div>

                                                

                    </div>

                    

                    <div class="col-lg-2 col-md-2 col-sm-6 visible-lg visible-md pm-book-event">


                    </div>

                    

                    <div class="col-lg-5 col-md-5 col-sm-6">

                    	<ul class="pm-sub-navigation">
                        	
                            <li><a href="{{URL::route('quienesSomos')}}">ACERCA DE NOSOTROS</a></li>

							<li></li>

                            <li><a href="{{URL::route('contacto')}}">CONTACTO</a></li>

			    <li class="pm-search-btn-li"><a href="https://www.facebook.com/CafeAguilaRoja" rel="nofollow" class="pm-search-btn" target="_blank" id="social"><i class="fa fa-facebook"></i></a></li>
                            <li class="pm-search-btn-li"><a href="http://www.twitter.com" rel="nofollow" class="pm-search-btn" target="_blank" id="social"><i class="fa fa-twitter"></i></a></li>
			    <li class="pm-search-btn-li"><a href="https://plus.google.com/u/2/b/112747037083375313285/112747037083375313285/" rel="publisher" target="_blank" id="social" class="pm-search-btn" ><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>

                    

                    

                </div>

            

            </div>

            

        </div>

        <!-- /Sub-header -->

    

    	<!-- Main navigation -->

        <header>

                

        	<div class="container">

            

            	<div class="row">

                	

                    <div class="col-lg-2 col-md-2 col-sm-12">

                    	

                        <div class="pm-header-logo-container">

                    		<a href="{{URL::route('index')}}"><img src="{{asset('img/logo-aguila-roja.png')}}" class="img-responsive pm-header-logo" alt="Logo representativo Aguila Roja"></a> 

                        </div>

                        

                        <div class="pm-header-mobile-btn-container">

                            <button type="button" class="navbar-toggle pm-main-menu-btn" id="pm-mobile-menu-trigger" ><i class="fa fa-bars"></i></button>

                        </div>

                    

                    </div>

                    

                    <div class="col-lg-10 col-md-10 col-sm-10 pm-main-menu">

                                        

                    	<nav class="navbar-collapse collapse">

                        

                        	<ul class="sf-menu pm-nav">

                        

                                <li>

                                    <a href="{{URL::route('quienesSomos')}}">QUIÉNES SOMOS</a>

                                    <ul>

                                        <li><a href="{{URL::route('nuestraImagen')}}">NUESTRA IMAGEN</a></li>

					<li><a href="{{URL::route('proceso-de-produccion-del-cafe')}}">Proceso de producci&oacute;n</a></li>

					<li><a href="{{URL::route('cafe-aguila-roja-en-colombia')}}">Caf&eacute; &Aacute;guila Roja en Colombia</a></li>



                                    </ul>

                                </li>

                                <li>

                                    <a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/">NUESTROS PRODUCTOS</a>
                                   
                                </li>

                                <li><a href="{{URL::route('recetas-de-cafe')}}">RECETAS</a></li>

                                <li>

                                	<a href="{{URL::route('clubGranito')}}">CLUB GRANINO</a>

                                </li>

                                <li>

                                	<a href="{{URL::route('wallpapers')}}">WALLPAPERS</a>
                                </li>

                                <li>

                                	<a href="{{URL::route('contacto')}}">CONTACTO</a>

                                </li>
                            
                            </ul>

                        

                        </nav>  

                                              

                    </div>

                    

                </div>

            

            </div>

                    

        </header>

	@yield('body')

	<!-- BODY CONTENT end -->

        

        <div class="pm-fat-footer">

        	

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">

                    	<h6>Información</h6>

						<ul>

							<li><a href="{{URL::route('quienesSomos')}}">QUIÉNES SOMOS</a></li>

							<li><a href="http://cafeaguilaroja.com/productos-cafe-aguila-roja/">NUESTROS PRODUCTOS</a></li>

							<li><a href="{{URL::route('recetas-de-cafe')}}">RECETAS</a></li>

							<li><a href="{{URL::route('clubGranito')}}">CLUB GRANINO</a></li>

                            <li><a href="{{URL::route('wallpapers')}}">WALLPAPERS</a></li>

                            <li><a href="{{URL::route('contacto')}}">CONTACTO</a></li>

						</ul>
                    </div>

                    <!--<div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">

                      

					  <h6>Servicios</h6>

						<ul>


						</ul>

					  

					  <h6>Recent Posts</h6>


                    </div>-->

                    <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">

                      

					  <h6>Síguenos</h6>

						<ul>

							<li class="footer-logo-fb"><a href="https://www.facebook.com/CafeAguilaRoja" rel="nofollow" target="_blank">Facebook</a></li>

							<li class="footer-logo-tw"><a href="#" rel="nofollow" target="_blank">Twitter</a></li>

							<li class="footer-logo-yb"><a href="http://www.youtube.com/channel/UCkv1JRzgpabhBJgxz29z5YQ" rel="nofollow" target="_blank">Youtube</a></li>
							
							<li class="footer-logo-google"><a href="https://plus.google.com/u/2/b/112747037083375313285/112747037083375313285/" rel="publisher" target="_blank">Google +</a></li>

						</ul>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">

						<h6>Contáctanos</h6>

						<ul>

							<li>KM. 10 Via Cali-Candelaria</li>

							<li>Cali, Colombia</li>

							<li>(+572) 448 4767 - 39 - 95</li>
							
							<li><a href="mailto:contacto@aguilaroja.com">contacto@aguilaroja.com</a></li>
						</ul>

					 
                    </div>
			
                </div>	
		
            </div>
		
            <div id="terminos" style="text-align:center;color:#EAD2B0;">
                &copy; 2007 AGUILA ROJA TODOS LOS DERECHOS RESERVADOS CANDELARIA-COLOMBIA<br>
                <a class="terms" href="{{URL::route('politica')}}" target="_blank">Pol&iacute;tica de Privacidad</a> | <a class="terms" href="{{URL::route('terminos')}}" target="_blank">Terminos Legales</a>
            </div>
	    <div id="firma"><a href="http://xignacv.com" target="_blank">Desarrollado por: XIGNA</a></div>
        </div>
            
    </div><!-- /pm_layout-wrapper -->

    <!-- Development Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- Development Google Fonts -->
    <script src="{{asset('js/javascript.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.timeline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/image.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
@yield('footer')

    <p id="back-top" class="visible-lg visible-md visible-sm"> </p>

    <script type="text/javascript">$(function(){

        if(!$.browser.msie){

            var a=0;for(;a<15;a+=1){setTimeout(function b(){var a=Math.random()*1e3+5e3,c=$("<div />",{"class":"smoke",css:{opacity:0,left:Math.random()*200+80}});$(c).appendTo("#viewport");$.when($(c).animate({opacity:1},{duration:a/4,easing:"linear",queue:false,complete:function(){$(c).animate({opacity:0},{duration:a/3,easing:"linear",queue:false})}}),$(c).animate({bottom:$("#viewport").height()},{duration:a,easing:"linear",queue:false})).then(function(){$(c).remove();b()})},Math.random()*3e3)}

        }else{      

        "use strict";var a=0;for(;a<15;a+=1){setTimeout(function b(){var a=Math.random()*1e3+5e3,c=$("<div />",{"class":"smoke",css:{left:Math.random()*200+80}});$(c).appendTo("#viewport");$.when($(c).animate({},{duration:a/4,easing:"linear",queue:false,complete:function(){$(c).animate({},{duration:a/3,easing:"linear",queue:false})}}),$(c).animate({bottom:$("#viewport").height()},{duration:a,easing:"linear",queue:false})).then(function(){$(c).remove();b()})},Math.random()*3e3)}}}())

    </script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5512c15c15a2a30f"></script>-->
       

	<script>
		(function() {
    			
   	 	var script,
    		    scripts = document.getElementsByTagName('script')[0];
        
   		 function load(url) {
   	 	  script = document.createElement('script');
   	 	  script.async = true;
   	 	  script.src = url;
    	 	 scripts.parentNode.insertBefore(script, scripts);
   		 }
    
   	 	load('//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5512c15c15a2a30f');

    
		}());

	</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61337296-1', 'auto');
  ga('send', 'pageview');

</script>	

<script>

function addListener(element, type, callback) {
 if (element.addEventListener) element.addEventListener(type, callback);
 else if (element.attachEvent) element.attachEvent('on' + type, callback);
}
		
		var appandroid = document.getElementById('buttonandroid');
			addListener(appandroid, 'click', function() {
			ga('send', 'event', 'button', 'click', 'app android',1);
		});

		var appios = document.getElementById('buttonios');
			addListener(appios, 'click', function() {
			ga('send', 'event', 'button', 'click', 'app ios',1);
		});
		
	</script>

@if(Session::has('mensaje'))
				<script>

					alert('Su mensaje se ha enviado correctamente');

				</script>
	@endif

</body>



</html>

