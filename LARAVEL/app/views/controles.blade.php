<!DOCTYPE html>

<html lang="en">



<head>

    <meta name="robots" content="noindex">

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Controles">

    <meta name="author" content="Xigna">



    <title>Login</title>



    <!-- Bootstrap Core CSS -->

    <link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="{{asset('bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">



    <link href="{{asset('css/misEstilos.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>



<body>



    <div class="container">

        <div class="row">

            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title">Iniciar Sesión</h3>

                    </div>

                    <div class="panel-body">

                        {{ Form::open(array('url' => 'login')) }}

                            <fieldset>

                                <div class="form-group">

                                    {{Form::text('usuario', '', array( 'class' => 'form-control','placeholder' => 'Usuario'))}}

                                </div>

                                <div class="form-group">

                                    {{Form::password('clave',array( 'class' => 'form-control','placeholder' => 'contraseña'))}}

                                </div>

                                    {{Form::submit('Entrar',array( 'class' => 'btn btn-lg btn-success btn-block'))}}

                                    @if (Session::has('mensaje_login'))

                                    <span style="color:red;text-align:center;width: 100%;margin: 0 auto;display: inline-block;margin-top: 10px;font-family: 'Open Sans';">{{ Session::get('mensaje_login') }}</span>

                                    @endif

                            </fieldset>

                        {{ Form::close() }}

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- jQuery -->

    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>



    <!-- Metis Menu Plugin JavaScript -->

    <script src="{{asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>



    <!-- Custom Theme JavaScript -->

    <script src="{{asset('dist/js/sb-admin-2.js')}}"></script>



</body>



</html>

