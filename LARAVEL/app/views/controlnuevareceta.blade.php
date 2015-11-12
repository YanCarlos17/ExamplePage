@extends('templatecontrol')



@section('head')

    @parent

@stop



@section('titulo')

    <title>Nueva Receta</title>

@stop



@section('menu')

    @parent

@stop

@section('contenido')

        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Recetas</h1>

                </div>

                <!-- /.col-lg-12 -->

            </div>

            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            Nueva Receta

                        </div>

                        <div class="panel-body">

                            <div class="row">

                                <div class="col-lg-6">

                                   <form method="post" action="store" enctype = "multipart/form-data">

                        <p>Nombre: </p><input id="nombre" onkeyup="return comprueba();" class="form-control" name="nombre" type="text" required><br><br>

                        <p>Slug: </p><input id="slug" class="form-control" name="slug" type="text" required readonly><br><br>

                        <p>Receta para: <input  name="npersonas" onkeypress="return isNumberKey(event)" style="width:25px;" type="text" required> personas.</p><br>

                        <p>Descripción corta: </p>

                        <textarea class="form-control" style="max-width:420px;max-height:150px;width:420px;height:150px;" name="descorta" type="text" maxlength="490" required></textarea><br><br>

                        <p>Ingredientes y descripción completa: </p>

                        <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>

                        <script type="text/javascript">

                        tinymce.init({

                            selector: "textarea.editor",

                            theme: "modern",

                            plugins: [

                            ],

                            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

                            toolbar2: "print preview media | forecolor backcolor emoticons",

                            image_advtab: false,

                            templates: [

                                {title: 'Test template 1', content: 'Test 1'},

                                {title: 'Test template 2', content: 'Test 2'}

                            ]

                        });

                        </script>

                        <textarea class="editor" style="max-width:420px;max-height:250px;" name="descr" type="text" maxlength="990" ></textarea>

                        <br><br>

                        Imagen Grande(1128x240):<br>

                        <input class="file" type="file" name="imgGrande" accept="image/*" required><br>

                        Imagen Pequeña(743x260):<br>

                        <input class="file "type="file" name="imgPequena" accept="image/*" required><br>

                        <input  type="submit" value="Enviar" />

                        <br><br>

                    </form>

                                </div>

                                <!-- /.col-lg-6 (nested) -->

                            </div>

                            <!-- /.row (nested) -->

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!-- /.panel -->

                </div>

                <!-- /.col-lg-12 -->

            </div>

            <!-- /.row -->

        </div>

        <!-- /#page-wrapper -->

          <script>
        function comprueba(){
            var texto=document.getElementById('nombre');
            var res =document.getElementById('slug');
            texto.value.split(" ").join("-");
            res.value = texto.value.split(" ").join("-");
        }
        </script>              

@stop



@section('footer')

    @parent

@stop