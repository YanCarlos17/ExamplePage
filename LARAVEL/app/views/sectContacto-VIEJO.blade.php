@extends('index')

@section('titulo')

	<title>Contacto</title>

@stop

@section('descripcion')
    <meta name="description" content="Informaci&oacute;n de contacto con caf&eacute; Aguila Roja">
@stop

@section('head')
  
    <!-- Development Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


	 <!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUS8dTCVMuRJwIqGKCqzibeoQYLhQwVOM&sensor=true"></script>-->
    	


@stop



@section('body')

	<!-- SUB-HEADER area -->

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(img/banner-contacto.jpg);">

        	

            <div class="pm-sub-header-title-container">

            	<p class="pm-sub-header-title"><span>CONTACTO</span></p>

            </div>

            

        </div>

        

        <!-- SUB-HEADER area end -->

        

        <!-- BODY CONTENT starts here -->

        

        <div class="container pm-containerPadding-top-60 pm-containerPadding-bottom-60">

        	<div class="row">

                <div class="col-lg-12">	
		  	@if(Session::has('mensaje'))
				
				<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>Su mensaje se ha enviado correctamente.</div>   				

			@endif

                    <iframe src="https://www.google.com/maps/d/embed?mid=zXnnd46tM9bc.kkF7tlC3yptI" width="320" height="300"></iframe>                </div>

            </div>

        </div>

        

        <div class="container pm-containerPadding-bottom-60">

        	<div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 pm-column-spacing">

                

                      <h6>Dirección</h6>

                      <p> KM. 10 Via Cali-Candelaria <br/></p>

                      

                      <div class="pm-divider" style="margin:20px 0;"></div>

                      

                      <h6>Teléfono</h6>

                      <p> (2) 448 47 67<br/> </p>

                      

                      <div class="pm-divider" style="margin:20px 0;"></div>

                      

                      <h6>Email</h6>

                      <p><a href="mailto:contacto@aguilaroja.com">contacto@aguilaroja.com</a></p>

                      

                      <div class="pm-divider" style="margin:20px 0;"></div>

                      

                      <h6>Aguila Roja</h6>

                      <p style="text-align:justify;">Si su pregunta o comentario no puede ser enviado por e-mail, por favor llámenos gratis a la línea 018000934777 de 8:00 am a 5:00 pm de lunes a viernes.



O si lo prefiere escribanos también al correo electr&oacute;nico contacto@aguilaroja.com



Escribanos a caf&eacute; Aguila Roja, Servicio de Atención al Cliente A.A No. 10390 Cali-Colombia



La información consignada en este formulario podrá ser verificada por nuestra compañ&iacute;a en cualquier momento.</p>

                      

                      

                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 pm-column-spacing">

                      

                    <h6 class="pm-primary">ENVÍANOS UN MENSAJE</h6>

                    <div class="pm-contact-form-container">

                    	<p class="pm-required">Para café Aguila Roja es de gran importancia conocer sus opiniones sobre nuestra empresa y nuestros productos. Si tiene alguna inquietud no dude en contactarse con nosotros a través de esta ventana. Le responderemos lo antes posible.</p>

                    	<form id="pm-contact-form" action="contactoF" method="post">
			
                            <input name="nombre" id="pm_s_full_name" type="text" placeholder="Nombre *" class="pm-form-textfield" required>

                            <input name="email" id="pm_s_email_address" type="email" placeholder="Email *" class="pm-form-textfield" required>

                            <input name="asunto" id="pm_s_subject" type="text" placeholder="Asunto *" class="pm-form-textfield" required>

                            <textarea name="mensaje" id="pm_s_message" cols="20" rows="6" placeholder="Mensaje *" class="pm-form-textarea" required></textarea>
                            <div id="pm-contact-form-response"></div>

                            <input name="pm-form-submit-btn" class="pm-rounded-submit-btn pm-primary" type="submit" value="Enviar" id="pm-contact-form-btn" />

                        </form>

                    </div>

                      

                </div>

            </div>

        </div>

        

        <!-- BODY CONTENT end -->
	
@stop

@section('footer')

	
	
@stop