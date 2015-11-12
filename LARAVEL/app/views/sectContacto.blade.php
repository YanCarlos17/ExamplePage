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
        
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

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
	
	    @if(Session::has('errorcaptcha'))

            	<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button><i class="fa fa-exclamation-triangle"></i> Ha ocurrido un error con su env&iacute;o, <b>Revise el formulario</b></div>

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



O si lo prefiere escribanos también al correo electr&oacute;nico <a href="mailto:contacto@aguilaroja.com">contacto@aguilaroja.com</a>



Escribanos a caf&eacute; Aguila Roja, Servicio de Atención al Cliente A.A No. 10390 Cali-Colombia



La información consignada en este formulario podrá ser verificada por nuestra compañ&iacute;a en cualquier momento.</p>

                      

                      

                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 pm-column-spacing">

                      

                    <h6 class="pm-primary">ENVÍANOS UN MENSAJE</h6>

                    <div class="pm-contact-form-container">

                        <p class="pm-required">Para café Aguila Roja es de gran importancia conocer sus opiniones sobre nuestra empresa y nuestros productos. Si tiene alguna inquietud no dude en contactarse con nosotros a través de esta ventana. Le responderemos lo antes posible.</p>
              
                        @if(Session::has('errorcaptcha'))
                            <form id="pm-contact-form" action="contactoF" method="post">
                    
                                <select name="asunto" class="pm-form-textfield" required>
                                      @if(Session::get('errorcaptcha')['asunto'] == "ninguno") <option selected value="ninguno" disabled selected style='display:none;'>- Seleccione el motivo del contacto -</option>@else <option value="ninguno" disabled selected style='display:none;'>Seleccione el motivo del contacto</option> @endif
				      @if(Session::get('errorcaptcha')['asunto'] == "Solicitud Empleo") <option selected value="Solicitud Empleo">- Solicitud Empleo</option>@else <option value="Solicitud Empleo">Solicitud Empleo</option> @endif
                                      @if(Session::get('errorcaptcha')['asunto'] == "Quejas / Servicio") <option selected value="Quejas / Servicio">- Quejas / Servicio</option>@else <option value="Quejas / Servicio">Quejas / Servicio</option> @endif
				      @if(Session::get('errorcaptcha')['asunto'] == "Quejas / Producto") <option selected value="Quejas / Producto">- Quejas / Producto</option>@else <option value="Quejas / Producto">Quejas / Producto</option> @endif	
                                      @if(Session::get('errorcaptcha')['asunto'] == "Solicitud / Servicio") <option selected value="Solicitud / Servicio">- Solicitud / Servicio (Eventos - Degustaciones)</option>@else <option value="Solicitud / Servicio">Solicitud / Servicio (Eventos - Degustaciones)</option> @endif
				      @if(Session::get('errorcaptcha')['asunto'] == "Comercio Exterior - Importaciones / Exportaciones") <option selected value="Comercio Exterior - Importaciones / Exportaciones">- Comercio Exterior - Importaciones / Exportaciones</option>@else <option value="Comercio Exterior - Importaciones / Exportaciones">Comercio Exterior - Importaciones / Exportaciones</option> @endif
				      @if(Session::get('errorcaptcha')['asunto'] == "Patrocinios") <option selected value="Patrocinios">- Patrocinios</option>@else <option value="Patrocinios">Patrocinios</option> @endif
				      @if(Session::get('errorcaptcha')['asunto'] == "Sugerencias") <option selected value="Sugerencias">- Sugerencias</option>@else <option value="Sugerencias">Sugerencias</option> @endif
				      @if(Session::get('errorcaptcha')['asunto'] == "Otros") <option selected value="Otros">- Otros</option>@else <option value="Otros">Otros</option> @endif

                                </select>

                                <select id="pais" name="pais" class="pm-form-textfield" onchange="select_cambio()">
                                    @if(Session::get('errorcaptcha')['pais'] == "Afganistan")<option selected value="Afganistan">Afganistán</option>@else <option value="Afganistan">Afganistán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Albania")<option selected value="Albania">Albania</option>@else <option value="Albania">Albania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Alemania")<option selected value="Alemania">Alemania</option>@else <option value="Alemania">Alemania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Andorra")<option selected value="Andorra">Andorra</option>@else <option value="Andorra">Andorra</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Angola")<option selected value="Angola">Angola</option>@else <option value="Angola">Angola</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Anguilla")<option selected value="Anguilla">Anguilla</option>@else <option value="Anguilla">Anguilla</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Ant�rtida")<option selected value="Ant�rtida">Antártida</option>@else <option value="Ant�rtida">Antártida</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Antigua y Barbuda")<option selected value="Antigua y Barbuda">Antigua y Barbuda</option>@else <option value="Antigua y Barbuda">Antigua y Barbuda</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Antillas Holandesas")<option selected value="Antillas Holandesas">Antillas Holandesas</option>@else <option value="Antillas Holandesas">Antillas Holandesas</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Arabia Saud�")<option selected value="Arabia Saud�">Arabia Saudí</option>@else <option value="Arabia Saud�">Arabia Saudí</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Argelia")<option selected value="Argelia">Argelia</option>@else <option value="Argelia">Argelia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Argentina")<option selected value="Argentina">Argentina</option>@else <option value="Argentina">Argentina</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Armenia")<option selected value="Armenia">Armenia</option>@else <option value="Armenia">Armenia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Aruba")<option selected value="Aruba">Aruba</option>@else <option value="Aruba">Aruba</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Australia")<option selected value="Australia">Australia</option>@else <option value="Australia">Australia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Austria")<option selected value="Austria">Austria</option>@else <option value="Austria">Austria</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Azerbaiy�n")<option selected value="Azerbaiy�n">Azerbaiyán</option>@else <option value="Azerbaiy�n">Azerbaiyán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Bahamas")<option selected value="Bahamas">Bahamas</option>@else <option value="Bahamas">Bahamas</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Bahrein")<option selected value="Bahrein">Bahrein</option>@else <option value="Bahrein">Bahrein</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Bangladesh")<option selected value="Bangladesh">Bangladesh</option>@else <option value="Bangladesh">Bangladesh</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Barbados")<option selected value="Barbados">Barbados</option>@else <option value="Barbados">Barbados</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "B�lgica")<option selected value="B�lgica">Bélgica</option>@else <option value="B�lgica">Bélgica</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Belice")<option selected value="Belice">Belice</option>@else <option value="Belice">Belice</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Benin")<option selected value="Benin">Benin</option>@else <option value="Benin">Benin</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Bermudas")<opti on selected value="BermudasBermudas">Bermudas</option>@else <option value="Bermudas">Bermudas</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Bielorrusia")<option selected value="Bielorrusia">Bielorrusia</option>@else <option value="Bielorrusia">Bielorrusia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Birmania")<option selected value="Birmania">Birmania</option>@else <option value="Birmania">Birmania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Bolivia")<option selected value="Bolivia">Bolivia</option>@else <option value="Bolivia">Bolivia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Bosnia y Herzegovina")<option selected value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>@else <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Botswana")<option selected value="Botswana">Botswana</option>@else <option value="Botswana">Botswana</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Brasil")<option selected value="Brasil">Brasil</option>@else <option value="Brasil">Brasil</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Brunei")<option selected value="Brunei">Brunei</option>@else <option value="Brunei">Brunei</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Bulgaria")<option selected value="Bulgaria">Bulgaria</option>@else <option value="Bulgaria">Bulgaria</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Burkina Faso")<option selected value="Burkina Faso">Burkina Faso</option>@else <option value="Burkina Faso">Burkina Faso</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Burundi")<option selected value="Burundi">Burundi</option>@else <option value="Burundi">Burundi</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "But�n")<option selected value="But�n">Bután</option>@else <option value="But�n">Bután</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Cabo Verde")<option selected value="Cabo Verde">Cabo Verde</option>@else <option value="Cabo Verde">Cabo Verde</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Camboya")<option selected value="Camboya">Camboya</option>@else <option value="Camboya">Camboya</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Camer�n")<option selected value="Camer�n">Camerún</option>@else <option value="Camer�n">Camerún</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Canad�")<option selected value="Canad�">Canadá</option>@else <option value="Canad�">Canadá</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Chad")<option selected value="Chad">Chad</option>@else <option value="Chad">Chad</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Chile")<option selected value="Chile">Chile</option>@else <option value="Chile">Chile</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "China")<option selected value="China">China</option>@else <option value="China">China</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Chipre")<option selected value="Chipre">Chipre</option>@else <option value="Chipre">Chipre</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Ciudad del Vaticano")<option selected value="Ciudad del Vaticano">Ciudad del Vaticano</option>@else <option value="Ciudad del Vaticano">Ciudad del Vaticano</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Colombia")<option selected value="Colombia">Colombia</option>@else <option value="Colombia">Colombia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Comores")<option selected value="Comores">Comores</option>@else <option value="Comores">Comores</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Congo")<option selected value="Congo">Congo</option>@else <option value="Congo">Congo</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Rep�blica Democr�tica del Congo")<option selected value="Rep�blica Democr�tica del Congo">República Democrática del Congo</option>@else <option value="Rep�blica Democr�tica del Congo">República Democrática del Congo</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Corea")<option selected value="Corea">Corea</option>@else <option value="Corea">Corea</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Corea del Norte")<option selected value="Corea del Norte">Corea del Norte</option>@else <option value="Corea del Norte">Corea del Norte</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Costa de Marfil")<option selected value="Costa de Marfil">Costa de Marfíl</option>@else <option value="Costa de Marfil">Costa de Marfíl</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Costa Rica")<option selected value="Costa Rica">Costa Rica</option>@else <option value="Costa Rica">Costa Rica</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Croacia (Hrvatska)")<option selected value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>@else <option value="Croacia (Hrvatska)">Croacia (Hrvatska)</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Cuba")<option selected value="Cuba">Cuba</option>@else <option value="Cuba">Cuba</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Dinamarca")<option selected value="Dinamarca">Dinamarca</option>@else <option value="Dinamarca">Dinamarca</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Djibouti")<option selected value="Djibouti">Djibouti</option>@else <option value="Djibouti">Djibouti</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Dominica")<option selected value="Dominica">Dominica</option>@else <option value="Dominica">Dominica</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Ecuador")<option selected value="Ecuador">Ecuador</option>@else <option value="Ecuador">Ecuador</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Egipto")<option selected value="Egipto">Egipto</option>@else <option value="Egipto">Egipto</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "El Salvador")<option selected value="El Salvador">El Salvador</option>@else <option value="El Salvador">El Salvador</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Emiratos Arabes Unidos")<option selected value="Emiratos Arabes Unidos">Emiratos Árabes Unidos</option>@else <option value="Emiratos Arabes Unidos">Emiratos Árabes Unidos</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Eritrea")<option selected value="Eritrea">Eritrea</option>@else <option value="Eritrea">Eritrea</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Eslovenia")<option selected value="Eslovenia">Eslovenia</option>@else <option value="Eslovenia">Eslovenia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Espana")<option selected value="Espana">España</option>@else <option value="Espana">España</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Estados Unidos")<option selected value="Estados Unidos">Estados Unidos</option>@else <option value="Estados Unidos">Estados Unidos</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Estonia")<option selected value="Estonia">Estonia</option>@else <option value="Estonia">Estonia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Etiop�a")<option selected value="Etiop�a">Etiopía</option>@else <option value="Etiop�a">Etiopía</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Fiji")<option selected value="Fiji">Fiji</option>@else <option value="Fiji">Fiji</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Filipinas")<option selected value="Filipinas">Filipinas</option>@else <option value="Filipinas">Filipinas</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Finlandia")<option selected value="Finlandia">Finlandia</option>@else <option value="Finlandia">Finlandia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Francia")<option selected value="Francia">Francia</option>@else <option value="Francia">Francia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Gab�n")<option selected value="Gab�n">Gabón</option>@else <option value="Gab�n">Gabón</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Gambia")<option selected value="Gambia">Gambia</option>@else <option value="Gambia">Gambia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Georgia")<option selected value="Georgia">Georgia</option>@else <option value="Georgia">Georgia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Ghana")<option selected value="Ghana">Ghana</option>@else <option value="Ghana">Ghana</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Gibraltar")<option selected value="Gibraltar">Gibraltar</option>@else <option value="Gibraltar">Gibraltar</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Granada")<option selected value="Granada">Granada</option>@else <option value="Granada">Granada</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Grecia")<option selected value="Grecia">Grecia</option>@else <option value="Grecia">Grecia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Groenlandia")<option selected value="Groenlandia">Groenlandia</option>@else <option value="Groenlandia">Groenlandia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Guadalupe")<option selected value="Guadalupe">Guadalupe</option>@else <option value="Guadalupe">Guadalupe</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Guam")<option selected value="Guam">Guam</option>@else <option value="Guam">Guam</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Guatemala")<option selected value="Guatemala">Guatemala</option>@else <option value="Guatemala">Guatemala</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Guayana")<option selected value="Guayana">Guayana</option>@else <option value="Guayana">Guayana</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Guayana Francesa")<option selected value="Guayana Francesa">Guayana Francesa</option>@else <option value="Guayana Francesa">Guayana Francesa</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Guinea")<option selected value="Guinea">Guinea</option>@else <option value="Guinea">Guinea</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Guinea Ecuatorial")<option selected value="Guinea Ecuatorial">Guinea Ecuatorial</option>@else <option value="Guinea Ecuatorial">Guinea Ecuatorial</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Guinea-Bissau")<option selected value="Guinea-Bissau">Guinea-Bissau</option>@else <option value="Guinea-Bissau">Guinea-Bissau</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Hait�")<option selected value="Hait�">Haití</option>@else <option value="Hait�">Haití</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Honduras")<option selected value="Honduras">Honduras</option>@else <option value="Honduras">Honduras</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Hungria")<option selected value="Hungria">Hungría</option>@else <option value="Hungria">Hungría</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "India")<option selected value="India">India</option>@else <option value="India">India</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Indonesia")<option selected value="Indonesia">Indonesia</option>@else <option value="Indonesia">Indonesia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Irak")<option selected value="Irak">Irak</option>@else <option value="Irak">Irak</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Iran")<option selected value="Iran">Irán</option>@else <option value="Iran">Irán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Irlanda")<option selected value="Irlanda">Irlanda</option>@else <option value="Irlanda">Irlanda</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Isla")<option selected value="Isla">Isla Bouvet</option>@else <option value="Isla">Isla Bouvet</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Isla de Christmas")<option selected value="Isla de Christmas">Isla de Christmas</option>@else <option value="Isla de Christmas">Isla de Christmas</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islandia")<option selected value="Islandia">Islandia</option>@else <option value="Islandia">Islandia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Caim�n")<option selected value="Islas Caim�n">Islas Caimán</option>@else <option value="Islas Caim�n">Islas Caimán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Cook")<option selected value="Islas Cook">Islas Cook</option>@else <option value="Islas Cook">Islas Cook</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas de Cocos o Keeling")<option selected value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>@else <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Faroe")<option selected value="Islas Faroe">Islas Faroe</option>@else <option value="Islas Faroe">Islas Faroe</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Heard y McDonald")<option selected value="Islas Heard y McDonald">Islas Heard y McDonald</option>@else <option value="Islas Heard y McDonald">Islas Heard y McDonald</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Malvina")<option selected value="Islas Malvina">Islas Malvinas</option>@else <option value="Islas Malvina">Islas Malvinas</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Marianas del Norte")<option selected value="Islas Marianas del Norte">Islas Marianas del Norte</option>@else <option value="Islas Marianas del Norte">Islas Marianas del Norte</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Marshall")<option selected value="Islas Marshall">Islas Marshall</option>@else <option value="Islas Marshall">Islas Marshall</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas menores de Estados Unidos")<option selected value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>@else <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Palau")<option selected value="Islas Palau">Islas Palau</option>@else <option value="Islas Palau">Islas Palau</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Salomon")<option selected value="Islas Salomon">Islas Salomón</option>@else <option value="Islas Salomon">Islas Salomón</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Svalbard y Jan Mayen")<option selected value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>@else <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Tokelau")<option selected value="Islas Tokelau">Islas Tokelau</option>@else <option value="Islas Tokelau">Islas Tokelau</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Turks y Caicos")<option selected value="Islas Turks y Caicos">Islas Turks y Caicos</option>@else <option value="Islas Turks y Caicos">Islas Turks y Caicos</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas V�rgenes (EEUU)")<option selected value="Islas V�rgenes (EEUU)">Islas Virgenes (EEUU)</option>@else <option value="Islas V�rgenes (EEUU)">Islas Virgenes (EEUU)</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas V�rgenes (Reino Unido)")<option selected value="Islas V�rgenes (Reino Unido)">Islas Virgenes (Reino Unido)</option>@else <option value="Islas V�rgenes (Reino Unido)">Islas Virgenes (Reino Unido)</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Islas Wallis y Futuna")<option selected value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>@else <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Israel")<option selected value="Israel">Israel</option>@else <option value="Israel">Israel</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Italia")<option selected value="Italia">Italia</option>@else <option value="Italia">Italia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Jamaica")<option selected value="Jamaica">Jamaica</option>@else <option value="Jamaica">Jamaica</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Jap�n")<option selected value="Jap�n">Japón</option>@else <option value="Jap�n">Japón</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Jordania")<option selected value="Jordania">Jordania</option>@else <option value="Jordania">Jordania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Kazajist�n")<option selected value="Kazajist�n">Kazajistán</option>@else <option value="Kazajist�n">Kazajistán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Kenia")<option selected value="Kenia">Kenia</option>@else <option value="Kenia">Kenia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Kirguizist�n")<option selected value="Kirguizist�n">Kirguizistán</option>@else <option value="Kirguizist�n">Kirguizistán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Kiribati")<option selected value="Kiribati">Kiribati</option>@else <option value="Kiribati">Kiribati</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Kuwait")<option selected value="Kuwait">Kuwait</option>@else <option value="Kuwait">Kuwait</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Laos")<option selected value="Laos">Laos</option>@else <option value="Laos">Laos</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Lesotho")<option selected value="Lesotho">Lesotho</option>@else <option value="Lesotho">Lesotho</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Letonia")<option selected value="Letonia">Letonia</option>@else <option value="Letonia">Letonia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "L�bano")<option selected value="L�bano">Líbano</option>@else <option value="L�bano">Líbano</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Liberia")<option selected value="Liberia">Liberia</option>@else <option value="Liberia">Liberia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Libia")<option selected value="Libia">Libia</option>@else <option value="Libia">Libia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Liechtenstein")<option selected value="Liechtenstein">Liechtenstein</option>@else <option value="Liechtenstein">Liechtenstein</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Lituania")<option selected value="Lituania">Lituania</option>@else <option value="Lituania">Lituania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Luxemburgo")<option selected value="Luxemburgo">Luxemburgo</option>@else <option value="Luxemburgo">Luxemburgo</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Ex-Republica Yugoslava de Macedonia")<option selected value="Ex-Republica Yugoslava de Macedonia">Ex-República Yugoslava de Macedonia</option>@else <option value="Ex-Republica Yugoslava de Macedonia">Ex-República Yugoslava de Macedonia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Madagascar")<option selected value="Madagascar">Madagascar</option>@else <option value="Madagascar">Madagascar</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Malasia")<option selected value="Malasia">Malasia</option>@else <option value="Malasia">Malasia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Malawi")<option selected value="Malawi">Malawi</option>@else <option value="Malawi">Malawi</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Maldivas")<option selected value="Maldivas">Maldivas</option>@else <option value="Maldivas">Maldivas</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Mali")<option selected value="Mali">Malí</option>@else <option value="Mali">Malí</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Malta")<option selected value="Malta">Malta</option>@else <option value="Malta">Malta</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Marruecos")<option selected value="Marruecos">Marruecos</option>@else <option value="Marruecos">Marruecos</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Martinica")<option selected value="Martinica">Martinica</option>@else <option value="Martinica">Martinica</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Mauricio")<option selected value="Mauricio">Mauricio</option>@else <option value="Mauricio">Mauricio</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Mauritania")<option selected value="Mauritania">Mauritania</option>@else <option value="Mauritania">Mauritania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Mayotte")<option selected value="Mayotte">Mayotte</option>@else <option value="Mayotte">Mayotte</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Mexico")<option selected value="Mexico">México</option>@else <option value="Mexico">México</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Micronesia")<option selected value="Micronesia">Micronesia</option>@else <option value="Micronesia">Micronesia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Moldavia")<option selected value="Moldavia">Moldavia</option>@else <option value="Moldavia">Moldavia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Monaco")<option selected value="Monaco">Mónaco</option>@else <option value="Monaco">Mónaco</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Mongolia")<option selected value="Mongolia">Mongolia</option>@else <option value="Mongolia">Mongolia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Montserrat")<option selected value="Montserrat">Montserrat</option>@else <option value="Montserrat">Montserrat</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Mozambique")<option selected value="Mozambique">Mozambique</option>@else <option value="Mozambique">Mozambique</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Namibia")<option selected value="Namibia">Namibia</option>@else <option value="Namibia">Namibia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Nauru")<option selected value="Nauru">Nauru</option>@else <option value="Nauru">Nauru</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Nepal")<option selected value="Nepal">Nepal</option>@else <option value="Nepal">Nepal</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Nicaragua")<option selected value="Nicaragua">Nicaragua</option>@else <option value="Nicaragua">Nicaragua</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "N�ger")<option selected value="N�ger">Níger</option>@else <option value="N�ger">Níger</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Nigeria")<option selected value="Nigeria">Nigeria</option>@else <option value="Nigeria">Nigeria</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Niue")<option selected value="Niue">Niue</option>@else <option value="Niue">Niue</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Norfolk")<option selected value="Norfolk">Norfolk</option>@else <option value="Norfolk">Norfolk</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Noruega")<option selected value="Noruega">Noruega</option>@else <option value="Noruega">Noruega</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Nueva Caledonia")<option selected value="Nueva Caledonia">Nueva Caledonia</option>@else <option value="Nueva Caledonia">Nueva Caledonia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Nueva Zelanda")<option selected value="Nueva Zelanda">Nueva Zelanda</option>@else <option value="Nueva Zelanda">Nueva Zelanda</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Oman")<option selected value="Oman">Omán</option>@else <option value="Oman">Omán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Paises Bajos")<option selected value="Paises Bajos">Países Bajos</option>@else <option value="Paises Bajos">Países Bajos</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Panama")<option selected value="Panama">Panamá</option>@else <option value="Panama">Panamá</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Papua Nueva Guinea")<option selected value="Papua Nueva Guinea">Papúa Nueva Guinea</option>@else <option value="Papua Nueva Guinea">Papúa Nueva Guinea</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Paquistan")<option selected value="Paquistan">Paquistán</option>@else <option value="Paquistan">Paquistán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Paraguay")<option selected value="Paraguay">Paraguay</option>@else <option value="Paraguay">Paraguay</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Peru")<option selected value="Peru">Perú</option>@else <option value="Peru">Perú</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Pitcairn")<option selected value="Pitcairn">Pitcairn</option>@else <option value="Pitcairn">Pitcairn</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Polinesia Francesa")<option selected value="Polinesia Francesa">Polinesia Francesa</option>@else <option value="Polinesia Francesa">Polinesia Francesa</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Polonia")<option selected value="Polonia">Polonia</option>@else <option value="Polonia">Polonia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Portugal")<option selected value="Portugal">Portugal</option>@else <option value="Portugal">Portugal</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Puerto Rico")<option selected value="Puerto Rico">Puerto Rico</option>@else <option value="Puerto Rico">Puerto Rico</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Qatar")<option selected value="Qatar">Qatar</option>@else <option value="Qatar">Qatar</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Reino Unido")<option selected value="Reino Unido">Reino Unido</option>@else <option value="Reino Unido">Reino Unido</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Republica Centroafricana")<option selected value="Republica Centroafricana">República Centroafricana</option>@else <option value="Republica Centroafricana">República Centroafricana</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Republica Checa")<option selected value="Republica Checa">República Checa</option>@else <option value="Republica Checa">República Checa</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Republica de Sud�frica")<option selected value="Republica de Sud�frica">República de Sudáfrica</option>@else <option value="Republica de Sud�frica">República de Sudáfrica</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Republica Dominicana")<option selected value="Republica Dominicana">República Dominicana</option>@else <option value="Republica Dominicana">República Dominicana</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Republica Eslovaca")<option selected value="Republica Eslovaca">República Eslovaca</option>@else <option value="Republica Eslovaca">República Eslovaca</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Reunion")<option selected value="Reunion">Reunión</option>@else <option value="Reunion">Reunión</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Ruanda")<option selected value="Ruanda">Ruanda</option>@else <option value="Ruanda">Ruanda</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Rumania")<option selected value="Rumania">Rumania</option>@else <option value="Rumania">Rumania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Rusia")<option selected value="Rusia">Rusia</option>@else <option value="Rusia">Rusia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Sahara Occidental")<option selected value="Sahara Occidental">Sahara Occidental</option>@else <option value="Sahara Occidental">Sahara Occidental</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Saint Kitts y Nevis")<option selected value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>@else <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Samoa")<option selected value="Samoa">Samoa</option>@else <option value="Samoa">Samoa</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Samoa Americana")<option selected value="Samoa Americana">Samoa Americana</option>@else <option value="Samoa Americana">Samoa Americana</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "San Marino")<option selected value="San Marino">San Marino</option>@else <option value="San Marino">San Marino</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "San Vicente y Granadinas")<option selected value="San Vicente y Granadinas">San Vicente y Granadinas</option>@else <option value="San Vicente y Granadinas">San Vicente y Granadinas</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Santa Helena")<option selected value="Santa Helena">Santa Helena</option>@else <option value="Santa Helena">Santa Helena</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Santa Lucia")<option selected value="Santa Lucia">Santa Lucía</option>@else <option value="Santa Lucia">Santa Lucía</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Santo Tom� y Pr�ncipe")<option selected value="Santo Tom� y Pr�ncipe">Santo Tomé y Príncipe</option>@else <option value="Santo Tom� y Pr�ncipe">Santo Tomé y Príncipe</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Senegal")<option selected value="Senegal">Senegal</option>@else <option value="Senegal">Senegal</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Seychelles")<option selected value="Seychelles">Seychelles</option>@else <option value="Seychelles">Seychelles</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Sierra Leona")<option selected value="Sierra Leona">Sierra Leona</option>@else <option value="Sierra Leona">Sierra Leona</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Singapur")<option selected value="Singapur">Singapur</option>@else <option value="Singapur">Singapur</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Siria")<option selected value="Siria">Siria</option>@else <option value="Siria">Siria</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Somalia")<option selected value="Somalia">Somalia</option>@else <option value="Somalia">Somalia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Sri Lanka")<option selected value="Sri Lanka">Sri Lanka</option>@else <option value="Sri Lanka">Sri Lanka</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "St Pierre y Miquelon")<option selected value="St Pierre y Miquelon">St Pierre y Miquelon</option>@else <option value="St Pierre y Miquelon">St Pierre y Miquelon</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Suazilandia")<option selected value="Suazilandia">Suazilandia</option>@else <option value="Suazilandia">Suazilandia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Sudan")<option selected value="Sudan">Sudán</option>@else <option value="Sudan">Sudán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Suecia")<option selected value="Suecia">Suecia</option>@else <option value="Suecia">Suecia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Suiza")<option selected value="Suiza">Suiza</option>@else <option value="Suiza">Suiza</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Surinam")<option selected value="Surinam">Surinam</option>@else <option value="Surinam">Surinam</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Tailandia")<option selected value="Tailandia">Tailandia</option>@else <option value="Tailandia">Tailandia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Taiwan")<option selected value="Taiwan">Taiwán</option>@else <option value="Taiwan">Taiwán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Tanzania")<option selected value="Tanzania">Tanzania</option>@else <option value="Tanzania">Tanzania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Tayikistan")<option selected value="Tayikistan">Tayikistán</option>@else <option value="Tayikistan">Tayikistán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Territorios franceses del Sur")<option selected value="Territorios franceses del Sur">Territorios franceses del Sur</option>@else <option value="Territorios franceses del Sur">Territorios franceses del Sur</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Timor Oriental")<option selected value="Timor Oriental">Timor Oriental</option>@else <option value="Timor Oriental">Timor Oriental</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Togo")<option selected value="Togo">Togo</option>@else <option value="Togo">Togo</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Tonga")<option selected value="Tonga">Tonga</option>@else <option value="Tonga">Tonga</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Trinidad y Tobago")<option selected value="Trinidad y Tobago">Trinidad y Tobago</option>@else <option value="Trinidad y Tobago">Trinidad y Tobago</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Tunez")<option selected value="Tunez">Túnez</option>@else <option value="Tunez">Túnez</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Turkmenistan")<option selected value="Turkmenistan">Turkmenistán</option>@else <option value="Turkmenistan">Turkmenistán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Turquia")<option selected value="Turquia">Turquía</option>@else <option value="Turquia">Turquía</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Tuvalu")<option selected value="Tuvalu">Tuvalu</option>@else <option value="Tuvalu">Tuvalu</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Ucrania")<option selected value="Ucrania">Ucrania</option>@else <option value="Ucrania">Ucrania</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Uganda")<option selected value="Uganda">Uganda</option>@else <option value="Uganda">Uganda</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Uruguay")<option selected value="Uruguay">Uruguay</option>@else <option value="Uruguay">Uruguay</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Uzbekist�n")<option selected value="Uzbekist�n">Uzbekistán</option>@else <option value="Uzbekist�n">Uzbekistán</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Vanuatu")<option selected value="Vanuatu">Vanuatu</option>@else <option value="Vanuatu">Vanuatu</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Venezuela")<option selected value="Venezuela">Venezuela</option>@else <option value="Venezuela">Venezuela</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Vietnam")<option selected value="Vietnam">Vietnam</option>@else <option value="Vietnam">Vietnam</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Yemen")<option selected value="Yemen">Yemen</option>@else <option value="Yemen">Yemen</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Yugoslavia")<option selected value="Yugoslavia">Yugoslavia</option>@else <option value="Yugoslavia">Yugoslavia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Zambia")<option selected value="Zambia">Zambia</option>@else <option value="Zambia">Zambia</option> @endif
                                    @if(Session::get('errorcaptcha')['pais'] == "Zimbabue")<option selected value="Zimbabue">Zimbabue</option>@else <option value="Zimbabue">Zimbabue</option> @endif
                                </select>
                                @if(Session::get('errorcaptcha')['pais'] == "Colombia")
                                <div id="contenedor_departamento">
                                  <select id="seleccion_departamento" name="departamento" class="select-visible">
                                    @if(Session::get('errorcaptcha')['departamento'] == "amazonas")<option selected value="amazonas" selected>Amazonas</option>@else <option value="amazonas" selected>Amazonas</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "antioquia")<option selected value="antioquia">Antioquia</option>@else <option value="antioquia">Antioquia</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "arauca")<option selected value="arauca">Arauca</option>@else <option value="arauca">Arauca</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "atlantico")<option selected value="atlantico">Atl&aacute;ntico</option>@else <option value="atlantico">Atl&aacute;ntico</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "bolivar")<option selected value="bolivar">Bolivar</option>@else <option value="bolivar">Bolivar</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "boyaca")<option selected value="boyaca">Boyac&aacute;</option>@else <option value="boyaca">Boyac&aacute;</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "caldas")<option selected value="caldas">Caldas</option>@else <option value="caldas">Caldas</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "caqueta")<option selected value="caqueta">Caquet&aacute;</option>@else <option value="caqueta">Caquet&aacute;</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "casanare")<option selected value="casanare">Casanare</option>@else <option value="casanare">Casanare</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "cauca")<option selected value="cauca">Cauca</option>@else <option value="cauca">Cauca</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "cesar")<option selected value="cesar">Cesar</option>@else <option value="cesar">Cesar</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "choco")<option selected value="choco">Choc&oacute;</option>@else <option value="choco">Choc&oacute;</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "cordoba")<option selected value="cordoba">C&oacute;rdoba</option>@else <option value="cordoba">C&oacute;rdoba</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "cundinamarca")<option selected value="cundinamarca">Cundinamarca</option>@else <option value="cundinamarca">Cundinamarca</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "guainia")<option selected value="guainia">Guain&iacute;ia</option>@else <option value="guainia">Guain&iacute;ia</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "guaviare")<option selected value="guaviare">Guaviare</option>@else <option value="guaviare">Guaviare</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "huila")<option selected value="huila">Huila</option>@else <option value="huila">Huila</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "guajira")<option selected value="guajira">La Guajira</option>@else <option value="guajira">La Guajira</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "magadelan")<option selected value="magadelan">Magdalena</option>@else <option value="magadelan">Magdalena</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "meta")<option selected value="meta">Meta</option>@else <option value="meta">Meta</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "narino")<option selected value="narino">Nari&ntilde;o</option>@else <option value="narino">Nari&ntilde;o</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "norte_santander")<option selected value="norte_santander">Norte de Santander</option>@else <option value="norte_santander">Norte de Santander</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "putumayo")<option selected value="putumayo">Putumayo</option>@else <option value="putumayo">Putumayo</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "quindio")<option selected value="quindio">Quind&iacute;io</option>@else <option value="quindio">Quind&iacute;io</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "risaralda")<option selected value="risaralda">Risaralda</option>@else <option value="risaralda">Risaralda</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "san_andres")<option selected value="san_andres">San Andr&eacute;s y Providencia</option>@else <option value="san_andres">San Andr&eacute;s y Providencia</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "santander")<option selected value="santander">Santander</option>@else <option value="santander">Santander</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "sucre")<option selected value="sucre">Sucre</option>@else <option value="sucre">Sucre</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "tolima")<option selected value="tolima">Tolima</option>@else <option value="tolima">Tolima</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "valle")<option selected value="valle">Valle Del Cauca</option>@else <option value="valle">Valle Del Cauca</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "vaupes")<option selected value="vaupes">Vaup&eacute;s</option>@else <option value="vaupes">Vaup&eacute;s</option> @endif
                                    @if(Session::get('errorcaptcha')['departamento'] == "vichada")<option selected value="vichada">Vichada</option>@else <option value="vichada">Vichada</option> @endif
                                  </select>

                                  <input id="escribir_departamento" name="nada" id="pm_s_full_name" type="text" placeholder="Estado *" class="select-invisible">

                                  @else
                                    <select id="seleccion_departamento" name="departamento" class="select-invisible">
                                    <option selected value="amazonas" selected>Amazonas</option>
                                    <option selected value="antioquia">Antioquia</option>
                                    <option selected value="arauca">Arauca</option>
                                    <option selected value="atlantico">Atl&aacute;ntico</option>
                                    <option selected value="bolivar">Bolivar</option>
                                    <option selected value="boyaca">Boyac&aacute;</option>
                                    <option selected value="caldas">Caldas</option>
                                    <option selected value="caqueta">Caquet&aacute;</option>
                                    <option selected value="casanare">Casanare</option>
                                    <option selected value="cauca">Cauca</option>
                                    <option selected value="cesar">Cesar</option>
                                    <option selected value="choco">Choc&oacute;</option>
                                    <option selected value="cordoba">C&oacute;rdoba</option>
                                    <option selected value="cundinamarca">Cundinamarca</option>
                                    <option selected value="guainia">Guain&iacute;ia</option>
                                    <option selected value="guaviare">Guaviare</option>
                                    <option selected value="huila">Huila</option>
                                    <option selected value="guajira">La Guajira</option>
                                    <option selected value="magadelan">Magdalena</option>
                                    <option selected value="meta">Meta</option>
                                    <option selected value="narino">Nari&ntilde;o</option>
                                    <option selected value="norte_santander">Norte de Santander</option>
                                    <option selected value="putumayo">Putumayo</option>
                                    <option selected value="quindio">Quind&iacute;io</option>
                                    <option selected value="risaralda">Risaralda</option>
                                    <option selected value="san_andres">San Andr&eacute;s y Providencia</option>
                                    <option selected value="santander">Santander</option>
                                    <option selected value="sucre">Sucre</option>
                                    <option selected value="tolima">Tolima</option>
                                    <option selected value="valle">Valle Del Cauca</option>
                                    <option selected value="vaupes">Vaup&eacute;s</option>
                                    <option selected value="vichada">Vichada</option>
                                  </select>

                                  <input id="escribir_departamento" name="nada" id="pm_s_full_name" type="text" placeholder="Estado *" class="select-visible" value="{{Session::get('errorcaptcha')['departamento'];}}">


                                  @endif
                                </div>          
                                <input value="{{Session::get('errorcaptcha')['nombre'];}}" name="nombre" id="pm_s_full_name" type="text" placeholder="Nombre *" class="pm-form-textfield" required>

                                <input value="{{Session::get('errorcaptcha')['email'];}}" name="email" id="pm_s_email_address" type="email" placeholder="Email *" class="pm-form-textfield" required>

                                <input value="{{Session::get('errorcaptcha')['telefono'];}}" name="telefono" id="pm_s_subject" type="text" placeholder="Tel&eacute;fono" onkeypress="return isNumberKey(event)" class="pm-form-textfield" required>

                                <input value="{{Session::get('errorcaptcha')['direccion'];}}" name="direccion" id="pm_s_subject" type="text" placeholder="Direcci&oacute;n" class="pm-form-textfield" required>

                                <textarea name="mensaje" id="pm_s_message" cols="20" rows="6" placeholder="Mensaje *" class="pm-form-textarea" required>{{Session::get('errorcaptcha')['mensaje'];}}</textarea>
                                <div id="pm-contact-form-response"></div>
                    
                                 {{HTML::image(Captcha::img(), 'Captcha image')}}<br><br>
                                {{Form::text('captcha','',array('required' => 'required'))}}@if(Session::has('errorcaptcha')) <span class="errorCatpcha">Su texto no coincide con la imagen</span> @endif <br>

                                <input name="pm-form-submit-btn" class="pm-rounded-submit-btn pm-primary" type="submit" value="Enviar" id="pm-contact-form-btn" />

                            </form>
                        @else
                            <form id="pm-contact-form" action="contactoF" method="post">
                
                            <select name="asunto" class="pm-form-textfield" required>
                                  <option value="" disabled selected style='display:none;'>- Seleccione el motivo del contacto -</option>
				  <option value="Solicitud Empleo">- Solicitud Empleo</option>
                                  <option value="Quejas / Servicio">- Quejas / Servicio</option>
                                  <option value="Quejas / Producto">- Quejas / Producto</option>
				  <option value="Solicitud / Servicio">- Solicitud / Servicio (Eventos - Degustaciones)</option>
				  <option value="Comercio Exterior - Importaciones / Exportaciones">- Comercio Exterior - Importaciones / Exportaciones</option>
				  <option value="Patrocinios">- Patrocinios</option>
				  <option value="Sugerencias">- Sugerencias</option>
                                  <option value="Otros">- Otros</option>
                            </select>
                            <select id="pais" name="pais" class="pm-form-textfield" onchange="select_cambio()">
                                <option value="Afganistan">Afganistán</option>
                                <option value="Albania">Albania</option>
                                <option value="Alemania">Alemania</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antártida">Antártida</option>
                                <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                <option value="Antillas Holandesas">Antillas Holandesas</option>
                                <option value="Arabia Saudí">Arabia Saudí</option>
                                <option value="Argelia">Argelia</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaiyán">Azerbaiyán</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrein">Bahrein</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Bélgica">Bélgica</option>
                                <option value="Belice">Belice</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermudas">Bermudas</option>
                                <option value="Bielorrusia">Bielorrusia</option>
                                <option value="Birmania">Birmania</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Bután">Bután</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Camboya">Camboya</option>
                                <option value="Camerún">Camerún</option>
                                <option value="Canadá">Canadá</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Chipre">Chipre</option>
                                <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
                                <option value="Colombia" selected>Colombia</option>
                                <option value="Comores">Comores</option>
                                <option value="Congo">Congo</option>
                                <option value="República Democrática del Congo">República Democrática del Congo</option>
                                <option value="Corea">Corea</option>
                                <option value="Corea del Norte">Corea del Norte</option>
                                <option value="Costa de Marfil">Costa de Marfíl</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Dinamarca">Dinamarca</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egipto">Egipto</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Emiratos Arabes Unidos">Emiratos Árabes Unidos</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Eslovenia">Eslovenia</option>
                                <option value="España">España</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Etiopía">Etiopía</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Filipinas">Filipinas</option>
                                <option value="Finlandia">Finlandia</option>
                                <option value="Francia">Francia</option>
                                <option value="Gabón">Gabón</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Granada">Granada</option>
                                <option value="Grecia">Grecia</option>
                                <option value="Groenlandia">Groenlandia</option>
                                <option value="Guadalupe">Guadalupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guayana">Guayana</option>
                                <option value="Guayana Francesa">Guayana Francesa</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Haití">Haití</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungria">Hungría</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Irak">Irak</option>
                                <option value="Iran">Irán</option>
                                <option value="Irlanda">Irlanda</option>
                                <option value="Isla">Isla Bouvet</option>
                                <option value="Isla de Christmas">Isla de Christmas</option>
                                <option value="Islandia">Islandia</option>
                                <option value="Islas Caimán">Islas Caimán</option>
                                <option value="Islas Cook">Islas Cook</option>
                                <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
                                <option value="Islas Faroe">Islas Faroe</option>
                                <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                                <option value="Islas Malvina">Islas Malvinas</option>
                                <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                                <option value="Islas Marshall">Islas Marshall</option>
                                <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
                                <option value="Islas Palau">Islas Palau</option>
                                <option value="Islas Salomon">Islas Salomón</option>
                                <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
                                <option value="Islas Tokelau">Islas Tokelau</option>
                                <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
                                <option value="Islas Vírgenes (EEUU)">Islas Virgenes (EEUU)</option>
                                <option value="Islas Vírgenes (Reino Unido)">Islas Virgenes (Reino Unido)</option>
                                <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
                                <option value="Israel">Israel</option>
                                <option value="Italia">Italia</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japón">Japón</option>
                                <option value="Jordania">Jordania</option>
                                <option value="Kazajistán">Kazajistán</option>
                                <option value="Kenia">Kenia</option>
                                <option value="Kirguizistán">Kirguizistán</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Laos">Laos</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Letonia">Letonia</option>
                                <option value="Líbano">Líbano</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libia">Libia</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lituania">Lituania</option>
                                <option value="Luxemburgo">Luxemburgo</option>
                                <option value="Ex-Republica Yugoslava de Macedonia">Ex-República Yugoslava de Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malasia">Malasia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldivas">Maldivas</option>
                                <option value="Mali">Malí</option>
                                <option value="Malta">Malta</option>
                                <option value="Marruecos">Marruecos</option>
                                <option value="Martinica">Martinica</option>
                                <option value="Mauricio">Mauricio</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">México</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldavia">Moldavia</option>
                                <option value="Monaco">Mónaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Níger">Níger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk">Norfolk</option>
                                <option value="Noruega">Noruega</option>
                                <option value="Nueva Caledonia">Nueva Caledonia</option>
                                <option value="Nueva Zelanda">Nueva Zelanda</option>
                                <option value="Oman">Omán</option>
                                <option value="Paises Bajos">Países Bajos</option>
                                <option value="Panama">Panamá</option>
                                <option value="Papua Nueva Guinea">Papúa Nueva Guinea</option>
                                <option value="Paquistan">Paquistán</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Perú</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Polinesia Francesa">Polinesia Francesa</option>
                                <option value="Polonia">Polonia</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reino Unido">Reino Unido</option>
                                <option value="Republica Centroafricana">República Centroafricana</option>
                                <option value="Republica Checa">República Checa</option>
                                <option value="Republica de Sudáfrica">República de Sudáfrica</option>
                                <option value="Republica Dominicana">República Dominicana</option>
                                <option value="Republica Eslovaca">República Eslovaca</option>
                                <option value="Reunion">Reunión</option>
                                <option value="Ruanda">Ruanda</option>
                                <option value="Rumania">Rumania</option>
                                <option value="Rusia">Rusia</option>
                                <option value="Sahara Occidental">Sahara Occidental</option>
                                <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa Americana">Samoa Americana</option>
                                <option value="San Marino">San Marino</option>
                                <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
                                <option value="Santa Helena">Santa Helena</option>
                                <option value="Santa Lucia">Santa Lucía</option>
                                <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leona">Sierra Leona</option>
                                <option value="Singapur">Singapur</option>
                                <option value="Siria">Siria</option>
                                <option value="Somalia">Somalia</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
                                <option value="Suazilandia">Suazilandia</option>
                                <option value="Sudan">Sudán</option>
                                <option value="Suecia">Suecia</option>
                                <option value="Suiza">Suiza</option>
                                <option value="Surinam">Surinam</option>
                                <option value="Tailandia">Tailandia</option>
                                <option value="Taiwan">Taiwán</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Tayikistan">Tayikistán</option>
                                <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
                                <option value="Timor Oriental">Timor Oriental</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                <option value="Tunez">Túnez</option>
                                <option value="Turkmenistan">Turkmenistán</option>
                                <option value="Turquia">Turquía</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Ucrania">Ucrania</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistán">Uzbekistán</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabue">Zimbabue</option>
                            </select>

                            <div id="contenedor_departamento">
                              <select id="seleccion_departamento" name="departamento" class="select-visible">
                                <option value="amazonas" selected>Amazonas</option>
                                <option value="antioquia">Antioquia</option>
                                <option value="arauca">Arauca</option>
                                <option value="atlantico">Atl&aacute;ntico</option>
                                <option value="bolivar">Bolivar</option>
                                <option value="boyaca">Boyac&aacute;</option>
                                <option value="caldas">Caldas</option>
                                <option value="caqueta">Caquet&aacute;</option>
                                <option value="casanare">Casanare</option>
                                <option value="cauca">Cauca</option>
                                <option value="cesar">Cesar</option>
                                <option value="choco">Choc&oacute;</option>
                                <option value="cordoba">C&oacute;rdoba</option>
                                <option value="cundinamarca">Cundinamarca</option>
                                <option value="guainia">Guain&iacute;ia</option>
                                <option value="guaviare">Guaviare</option>
                                <option value="huila">Huila</option>
                                <option value="guajira">La Guajira</option>
                                <option value="magadelan">Magdalena</option>
                                <option value="meta">Meta</option>
                                <option value="narino">Nari&ntilde;o</option>
                                <option value="norte_santander">Norte de Santander</option>
                                <option value="putumayo">Putumayo</option>
                                <option value="quindio">Quind&iacute;io</option>
                                <option value="risaralda">Risaralda</option>
                                <option value="san_andres">San Andr&eacute;s y Providencia</option>
                                <option value="santander">Santander</option>
                                <option value="sucre">Sucre</option>
                                <option value="tolima">Tolima</option>
                                <option value="valle">Valle Del Cauca</option>
                                <option value="vaupes">Vaup&eacute;s</option>
                                <option value="vichada">Vichada</option>
                              </select>

                              <input id="escribir_departamento" name="nada" id="pm_s_full_name" type="text" placeholder="Estado *" class="select-invisible">
                            </div>          
                            <input name="nombre" id="pm_s_full_name" type="text" placeholder="Nombre *" class="pm-form-textfield" required>

                            <input name="email" id="pm_s_email_address" type="email" placeholder="Email *" class="pm-form-textfield" required>

                            <input name="telefono" id="pm_s_subject" type="text" placeholder="Tel&eacute;fono" onkeypress="return isNumberKey(event)" class="pm-form-textfield" required>

                            <input name="direccion" id="pm_s_subject" type="text" placeholder="Direcci&oacute;n" class="pm-form-textfield" required>

                            <textarea name="mensaje" id="pm_s_message" cols="20" rows="6" placeholder="Mensaje *" class="pm-form-textarea" required></textarea>
                            <div id="pm-contact-form-response"></div>
                
                             {{HTML::image(Captcha::img(), 'Captcha image')}}<br><br>
                             {{Form::text('captcha','',array('required' => 'required'))}}@if(Session::has('errorcaptcha')) <span class="errorCatpcha">Su texto no coincide con la imagen</span>@else <span class="xDCatpcha">Escriba el texto de la imagen <b>(Diferencie entre mayusculas y minusculas)</b></span> @endif <br>

                            <input name="pm-form-submit-btn" class="pm-rounded-submit-btn pm-primary" type="submit" value="Enviar" id="pm-contact-form-btn" />

                        </form>
                        @endif
                    </div>
                      
                </div>

            </div>

        </div>

        

        <!-- BODY CONTENT end -->
    
@stop

@section('footer')

    
    
@stop