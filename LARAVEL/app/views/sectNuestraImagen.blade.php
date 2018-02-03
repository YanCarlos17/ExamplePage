@extends('index')

@section('titulo')

	<title>Nuestra Imagen</title>

@stop

@section('descripcion')
    <meta name="description" content="Comerciales de televisi&oacute;n y jingles de Caf&eacute; Aguila Roja">
@stop

@section('head') 
        
    <!-- PrettyPhoto -->

    <link rel="stylesheet" type="text/css" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" />

    <!-- PrettyPhoto -->

    <!-- Development Google Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- Development Google Fonts -->

   <script src="{{asset('js/share.min.js')}}"></script>
@stop



@section('body')

	 

	 <!-- SUB-HEADER area -->

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(img/nuestraImagen/Nuestra-Imagen-aguila-roja.jpg);background-position: 50% -32px;">

        	

            <div class="pm-sub-header-title-container">

            	<p class="pm-sub-header-title"><span>NUESTRA IMAGEN</span></p>

            </div>

            

        </div>

        

        <!-- SUB-HEADER area end -->

		<!-- Gallery filter system -->

        <div class="container pm-containerPadding-top-80">
        	<div class="row">
            
                <div class="col-lg-12 pm-containerPadding-bottom-40">
                	
                    <div class="pm-featured-header-container">
                    
                    	<!-- Featured panel header 
                        <div class="pm-featured-header-title-container news" id="nuestraImagenBanner">
                        	<p class="pm-featured-header-title">NUESTRA IMAGEN</p>
                            <!--<p class="pm-featured-header-message">Browse our stunning showcase of beautiful photos</p>
                        </div>
                        <!-- Featured panel header end -->
                        
                        <!-- Filter menu -->
                        <div class="pm-isotope-filter-container">
                        	<ul class="pm-isotope-filter-system">
                            	<li><a href="#COMERCIALES" class="current" style="font-weight:bold; text-align:center;">COMERCIALES DE TELEVISI&oacute;N</a></li>
                            </ul>
                        </div>
                       
                        <!-- Filter menu end -->
                    
                    </div>
                    
                </div><!-- /.col-lg-12 -->
				<!-- /.col-lg-4 -->

		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-navidad3D.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Navidad 3D" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=hunv2Xklr4Q" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Navidad 3D</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=hunv2Xklr4Q" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing"  >
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-navidad.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        			<p>"Navidad" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=9qKS62VpG5Q" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name"> Navidad</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=9qKS62VpG5Q" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing"  >
		                	
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-navidad-90s.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Navidad 90's" Caf&eacute; &Aacute;guila Roja </p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=DCoeEwmkZ98" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Navidad 90's</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=DCoeEwmkZ98" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-palabras-magicas.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        			<p>"Palabras m&aacute;gicas" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=przNN3P1ySA" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Palabras m&aacute;gicas </p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=przNN3P1ySA" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div>

		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-hada.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Hada" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=aKCmBCc-hlk" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Hada</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=aKCmBCc-hlk" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-genio.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Genio" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=PGF5GamSmJw" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Genio</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=PGF5GamSmJw" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-graninomania.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Graninoman&iacute;a" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=Lk8W53rKgs4" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Graninoman&iacute;a</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=Lk8W53rKgs4" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-los-colombianos.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Los Colombianos" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=0V9s7E6eaa4" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">"Los Colombianos" </p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=0V9s7E6eaa4" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div>
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/comercial-television-cafe-aguila-roja-mercado.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Mercado &aacute;rabe" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=RZP9m96apl8" rel="prettyPhoto[comercial1]" >Ver</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Mercado &aacute;rabe</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=RZP9m96apl8" rel="prettyPhoto[comercial]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div>

		                <!-- /gallery item -->
            </div>
           


		<div class="col-lg-12 pm-containerPadding-bottom-40">

			<div class="pm-featured-header-container">
                                            
                       	 <!-- Filter menu -->
                       	 <div class="pm-isotope-filter-container">
                     	   		<ul class="pm-isotope-filter-system">
                      	      		<li><a href="#JINGLES" class="current" style="font-weight:bold; text-align:center;">JINGLES</a></li>
                       	     </ul>
                      	  </div>
                       
                      	  <!-- Filter menu end -->
                    
                   	 </div>
		</div>
			<!-- /.col-lg-4 -->

		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/jingles.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Abr&aacute;zame" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=Afzg-hq_HCc" rel="prettyPhoto[jingle1]" >Escuchar</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Abr&aacute;zame</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=Afzg-hq_HCc" rel="prettyPhoto[jingle]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing"  >
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/jingles.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        			<p>"Arriba" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=ShSLZ6sBLZs" rel="prettyPhoto[jingle1]" >Escuchar</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name"> Arriba</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=ShSLZ6sBLZs" rel="prettyPhoto[jingle]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing"  >
		                	
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/jingles.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Colombianos" Caf&eacute; &Aacute;guila Roja </p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=NCBNZw9reCE" rel="prettyPhoto[jingle1]" >Escuchar</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Colombianos</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=NCBNZw9reCE" rel="prettyPhoto[jingle]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/jingles.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        			<p>"Palabras" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=VrP4rKlfIyE" rel="prettyPhoto[jingle1]" >Escuchar</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Palabras</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=VrP4rKlfIyE" rel="prettyPhoto[jingle]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div>

		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/jingles.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Madres" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=skkjUjM5q5s" rel="prettyPhoto[jingle1]" >Escuchar</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Madres</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=skkjUjM5q5s" rel="prettyPhoto[jingle]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/jingles.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Navidad" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=YpWjY3qw3GI" rel="prettyPhoto[jingle1]" >Escuchar</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Navidad</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=YpWjY3qw3GI" rel="prettyPhoto[jingle]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/jingles.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Hadita" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=kNYPh8_065g" rel="prettyPhoto[jingle1]" >Escuchar</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Hadita</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=kNYPh8_065g" rel="prettyPhoto[jingle]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div><!-- /.col-lg-4 -->
		                <!-- /gallery item -->
		                
		                <!-- gallery item -->
		                <div class="col-lg-3 col-md-6 col-sm-12 pm-column-spacing">
		                
		                    <div class="pm-gallery-item-container">
		                    	<div class="pm-gallery-item-img-container" style="background-image:url(img/nuestraImagen/jingles.jpg);">
		                        	<span></span>
		                        	<div class="pm-gallery-item-img-quote">
		                        		<p>"Genio" Caf&eacute; &Aacute;guila Roja</p>
		                            </div>
		                            <div class="pm-gallery-item-img-read-more">
		                            	<a href="https://www.youtube.com/watch?v=dkmaTKCNjuE" rel="prettyPhoto[jingle1]" >Escuchar</a>
		                            </div>
		                        </div>
		                        
		                        <div class="pm-gallery-item-desc">
		                        	<p class="pm-gallery-item-name">Genio</p>
		                                                        
		                            <div class="pm-divider"></div>
		                            
		                            <ul class="pm-gallery-social-icons">
		                            	<li><div class="share-button"></div></li>
		                                <li><a href="https://www.youtube.com/watch?v=dkmaTKCNjuE" rel="prettyPhoto[jingle]" class="pm-rounded-btn pm-secondary small expand lightbox"><i class="fa fa-expand"></i></a></li>
		                            </ul>
		                            
		                        </div>
		                    </div>
		                    
		                </div>
        </div>
                	
                    
                    


	<script>
		new Share('.element');
		new	Share(".share-button", {
		  networks: {
		    facebook: {
		      url:window.location.href
		    },
		    pinterest: {
		      enabled: false// Enable Pinterest. [Default: true]
		    },
		    email: {
		      enabled: false // Enable Email. [Default: true]
		    }
		  }
		});
		</script>
		

@stop