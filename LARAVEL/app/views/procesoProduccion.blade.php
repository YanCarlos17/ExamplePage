@extends('index')



@section('titulo')

    <title>Apoyo promocional Caf&eacute; Aguila Roja</title>

@stop

@section('descripcion')
    <meta name="description" content="Aqui puedes pedir apoyo promocional de caf� Aguila Roja">
@stop

@section('head')    

    <link rel="shortcut icon" href="{{asset('img/Logo-AguilaRoja.png')}}">


   <link href="{{asset('bootstrap3/css/bootstrap.css')}}" rel="stylesheet">



    <!-- main css -->

    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    

    <!-- mobile css -->

    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    

    <!-- FontAwesome Support -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />

    <!-- FontAwesome Support -->

    

    <!-- Btns -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/btn.css')}}" />

    <!-- Btns -->

    

    <!-- Superfish menu -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/superfish/superfish.css')}}" />

    <!-- Superfish menu -->

    

    <!-- Theme Color selector -->

    <link href="{{asset('js/theme-color-selector/theme-color-selector.css')}}" type="text/css" rel="stylesheet">

    <!-- Theme Color selector -->

    

    <!-- Owl Carousel -->

    <link rel="stylesheet" type="text/css" href="{{asset('js/owl-carousel/owl.carousel.css')}}" />

    <!-- Owl Carousel -->

    

    <!-- Twitter feed -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/twitterfeed.css')}}" />

    <!-- Twitter feed -->

    

    <!-- Typicons -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/typicons/typicons.min.css')}}" />

    <!-- Typicons -->

    

    <!-- WOW animations -->

    <link rel="stylesheet" type="text/css" href="{{asset('js/wow/css/libs/animate.css')}}" />

    <!-- WOW animations -->

    

    <!-- Forms -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/forms.css')}}" />

    <!-- Forms -->

    

    <!-- Flickr feed -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/flickrfeed.css')}}" />

    <!-- Flickr feed -->

    

    <!-- Comments -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/comments.css')}}" />

    <!-- Comments -->

        

    <!-- Development Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- Development Google Fonts -->

    <!-- MIS ESTILOS -->

    

    <link href="{{asset('css/misEstilos.css')}}" rel="stylesheet">

    {{HTML::script('js/ajax.js')}}

@stop



@section('body')

 <!-- SUB-HEADER area -->

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-repeat:repeat-x;">

            

            <div class="pm-sub-header-title-container">

                <p class="pm-sub-header-title post">Proceso de producción</p>

            </div>

        </div>

        <div class="container pm-containerPadding80">



                        <div class="row" style="text-align:justify;">

                            <div id="proceso">

                            <form action="produccionF" method="post">

                                <table style="width:50%;margin: 0 auto;">

                                    <tr>

                                        <td>Degustación:</td><td> <input type="checkbox" name="degustacion" value="1"></td>

                                    </tr>

                                    <tr>

                                        <td>Uniformes: </td><td> <input type="checkbox" name="uniformes" value="1"></td>

                                    </tr>

                                    <tr>

                                        <td>Trofeos y/o medallas: </td><td> <input type="checkbox" name="trofeosMedallas" value="1"></td>

                                    </tr>

                                    <tr>

                                        <td>Obsequios: </td><td> <input type="checkbox" name="obsequios" value="1"></td>

                                    </tr>

                                    <tr>

                                        <td>Visita a las instalaciones de nuestro Club deportivo: </td><td> <input type="checkbox" name="club" value="1"></td>

                                    </tr>

                                    <tr>

                                        <td>Apoyo Economico: </td><td> <input type="checkbox" name="apoyoEconomico" value="1"></td>

                                    </tr>

                                    <tr>

                                        <td>Publicidad radial, prensa, revistas, vallas, etc. </td><td> <input type="checkbox" name="publicidad" value="1"></td>

                                    </tr>

                                    <tr>

                                        <td>Otro: </td><td> <input type="checkbox" name="otros" value="1"></td>

                                    </tr>

                                </table><br><br>

                                <table style="width:50%;margin: 0 auto;" border="1">



                                      <tbody><tr>



                                        <td width="240" stlye="padding:5px;"><div align="center">Datos</div></td>



                                        <td width="100">Descripción</td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69">Fecha del evento </td>



                                        <td><input name="fecha" type="text" id="fecha" size="50"></td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69"><div align="left">Lugar de realización </div></td>



                                        <td><input name="lugar" type="text" id="lugar" size="50"></td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69"><div align="left">Hora</div></td>



                                        <td><input name="hora" type="text" id="hora" size="50"></td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69"><div align="left">Número aprox. de asistentes </div></td>



                                        <td><input name="asistentes" type="text" id="asistentes" size="50"></td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69"><div align="left">Descripción del apoyo esperado </div></td>



                                        <td><input name="descripcion" type="text" id="descripcion" size="50"></td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69"><div align="left">Responsable</div></td>



                                        <td><input name="responsable" type="text" id="responsable" size="50"></td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69"><div align="left">Teléfonos</div></td>



                                        <td><input name="telefono" type="text" id="telefono" size="50"></td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69"><div align="left">Celular responsable </div></td>



                                        <td><input name="celular" type="text" id="celular" size="50"></td>



                                      </tr>



                                      <tr>



                                        <td class="Estilo69"><div align="left">Correo electronico responsable</div></td>



                                        <td><input name="correo" type="text" id="correo" size="50"></td>



                                      </tr>



                                    </tbody>



                                </table>

                                <table style="width:0%;margin: 0 auto;">

                                <tr><td><input name="pm-form-submit-btn" class="pm-rounded-submit-btn pm-primary" type="submit" value="Enviar" id="pm-contact-form-btn"></tr></td>

                                </table>

                                <table style="width:0%;margin: 0 auto;">

                                <tr><td>La información consignada en este formulario podrá ser verificada por nuestra compañia en cualquier momento.</td></tr>

                                </table>

                                <table style="width:0%;margin: 0 auto;">

                                <tr><td><a class="terms" href="{{URL::route('terminos')}}">Terminos Legales</a></td></tr>

                                </table>

                            </form>

                            </div>

                       </div>

        </div>



@stop