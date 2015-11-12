@extends('index')



@section('titulo')

    <title>Receta de {{$tReceta->NOMBRE_ENTRADA}}</title>

@stop

@section('descripcion')
    <meta name="description" content="Como hacer un {{$tReceta->NOMBRE_ENTRADA}}">
@stop

@section('head')    
    <!-- PrettyPhoto -->

    <link rel="stylesheet" type="text/css" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" />

    <!-- PrettyPhoto -->
      
    {{HTML::script('js/ajax.js')}}

@stop



@section('body')

        <!-- SUB-HEADER area -->

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(../img/recetas/cabezote-recetas.jpg);">
            
            <div class="pm-sub-header-title-container">
                <p class="pm-sub-header-title"><span>RECETAS</span></p>
            </div>
            
        </div>

        

        <!-- SUB-HEADER area end -->

        

        <!-- BODY CONTENT starts here -->

        

        <div class="container pm-containerPadding80">

                    	<div class="row">
			
			@if(Session::has('errorcaptcha'))
			
				<div class="col-lg-12">				

			            	<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button><i class="fa fa-exclamation-triangle"></i> Ha ocurrido un error con su env&iacute;o, <b>Revise el formulario</b></div>
	
				</div>
            		@endif

            

            	<!-- Blog post area -->

                <div class="col-lg-8 col-md-8 col-sm-12">
			

                	<a href="../Uploads/<?php echo $tReceta->FOTO_FULL ?>" rel="prettyPhoto" ><div class="pm-single-post-img-container" style="background-image:url('../Uploads/<?php echo $tReceta->FOTO2_ENTRADA ?>');">

                        <div class="pm-single-post-title">

                            <h2>{{$tReceta->NOMBRE_ENTRADA}}<BR>INGREDIENTES (PARA {{$tReceta->CANTIDADPERSONAS_ENTRADA}} @if ($tReceta->CANTIDADPERSONAS_ENTRADA < 2)PERSONA @else PERSONAS @endif)</h2>

                        </div>

                        

                    	</div></a>

                    <div class="pm-single-post-meta-container">

                        

                        <div class="pm-single-post-date">
				<?php setlocale (LC_TIME, "es_ES"); ?>
                            <p class="day">{{Carbon::parse($tReceta->FECHA_ENTRADA)->format('j')}}</p>

                            <p class="month-year">{{Carbon::parse($tReceta->FECHA_ENTRADA)->formatLocalized('%B')}}<br />{{Carbon::parse($tReceta->FECHA_ENTRADA)->format('Y')}}</p>

                        </div>

                        <ul class="pm-single-meta-options-list">

                            <li><i class="fa fa-comment"></i><span >{{$tReceta->comentario->count()}}</span> Comentarios</li>

                            <li id="btnLike"><i class="fa fa-heart"></i> <a style="cursor:pointer;" onclick="like({{$tReceta->ID_ENTRADA}});">Me gusta</a></li>

                        </ul>

                        

                        <div class="pm-single-meta-divider top"></div>

                        

                        <div class="pm-single-tags-container top">

                        

                            <p class="pm-tags-title">Categorias</p>

                            

                            <ul class="pm-tags-list">

                                <li><a href="#">Cocina</a></li>

                            </ul>

                        

                        </div>

                        

                        <div class="pm-single-meta-divider"></div>

                        

                        <p class="pm-likes-title top"><span id="contadorLikes">{{$tReceta->megusta->count()}}</span> Me gusta</p>

                        
			<div class="pm-single-meta-divider midividermeta"></div>

                    </div>

                    

                    <div class="pm-single-post-desc-container half-width">

                                                            

                        <p>{{$tReceta->DESCRIPCIONLARGA_ENTRADA}}</p>

                        

                    </div>

                    

                    <div class="pm-single-meta-divider bottom"></div>

                        

                    <div class="pm-single-tags-container bottom">

                    

                        <p class="pm-tags-title">Tags</p>

                        

                        <ul class="pm-tags-list">

                            <li><a href="#">travel</a>,</li>

                            <li><a href="#">cuisine</a>,</li>

                            <li><a href="#">art</a></li>

                        </ul>

                        

                        <p class="pm-tags-title">Category</p>

                        

                        <ul class="pm-tags-list">

                            <li><a href="#">Cuisine</a></li>

                        </ul>

                    

                    </div>

                        

                    <div class="pm-single-meta-divider bottom"></div>

                        

                    <p class="pm-likes-title bottom"><span>256</span> Likes</p>

                    

                    <div class="pm-single-post-share-container">

                        <p>Compartir: </p>

                        <ul class="pm-single-post-share-list">

                            <li class="pm_tip_static_top" title="Facebook"><a onclick="return !window.open(this.href, 'Share on Facebook', 'width=640, height=536')" href="https://www.facebook.com/sharer/sharer.php?u=href=$url&display=popup&ref=plugin" target="_window" class="fa fa-facebook"></a></li>

                            <li class="pm_tip_static_top" title="Twitter"><a onclick="return !window.open(this.href, 'Share on Twitter', 'width=640, height=536')" href="https://twitter.com/intent/tweet?text=Receta&nbsp;de&nbsp;{{$tReceta->NOMBRE_ENTRADA}}&nbsp;http://www.cafeaguilaroja.com/recetas-de-cafe/{{$tReceta->slug}}" target="_window"class="fa fa-twitter"></a></li>

                            <li class="pm_tip_static_top" title="Google Plus"><a onclick="return !window.open(this.href, 'Share on G+', 'width=640, height=536')" href="https://plus.google.com/share?url=http://www.cafeaguilaroja.com/recetas-de-cafe/{{$tReceta->slug}}" target="_window" class="fa fa-google-plus"></a></li>

                        </ul>

                    </div>

                   

                    <!-- Comments --> 

                    <div class="pm-comments-container">

                    

                    	<p class="pm-comment-section-title">{{$tReceta->comentario->count()}} Comentarios</p>

                        

                           @foreach ($coments as $comentario)

                        <!-- Comment -->

                        <div class="pm-comment-box-container">

                                                    

                            <div class="pm-comment-box-avatar-container">

                                <div class="pm-comment-avatar">

                                    <img src="{{asset('img/avatar-comentario.png')}}" alt="Comentario Aguila roja">

                                </div>

                                <ul class="pm-comment-author-list">

                                	<li><p class="pm-comment-name">{{$comentario->autor}}</p></li>

                                    <li><p class="pm-comment-date">{{Carbon::parse($comentario->fecha)->format('j/m/Y')}}</p></li>

                                </ul>

                                

                                

                            </div>

                            

                            <div class="pm-comment">

                                <p>{{{$comentario->TEXTO_COMENTARIO}}}</p>

                            </div>

                        </div>

                        <!-- Comment end -->

                        @endforeach

                        </div>

                        {{$coments->links()}}

                    

                    <!-- Comments end --> 

                    

                    <!-- Submit a comment form --> 

                      <div class="pm-submit-comment-form-container">

                        <p class="pm-comment-section-title">Enviar un comentario</p>

                        <p class="pm-comment-required">Su Email no será publicado. Los campos marcados son obligatorios *</p>

                        

                        <div class="row">

                        

                        	<form method="post" id="env_comentar" action="comentario">
				<input type="hidden" name="slug" value="{{$tReceta->slug}}"></input>

                                <input type="hidden" name="entrada" value="{{$tReceta->ID_ENTRADA}}"></input>

                            	<div class="col-lg-4 col-md-4 col-sm-12">

                            		<input name="nombre" type="text" value="{{Session::get('errorcaptcha')['nombre'];}}" placeholder="nombre *" class="pm-comment-form-textfield" required>

                                </div>

                                

                                <div class="col-lg-4 col-md-4 col-sm-12">

                            		<input name="email" value="{{Session::get('errorcaptcha')['email'];}}" type="email" placeholder="Email *" class="pm-comment-form-textfield" required>

                                </div>

                                

                                <div class="col-lg-12 pm-clear-element">

                            		<textarea name="comentario" cols="20" rows="10" placeholder="Comentario" class="pm-comment-form-textarea" required>{{Session::get('errorcaptcha')['mensaje'];}}</textarea>

                                </div>

                                

                                <div class="col-lg-12 pm-clear-element">

                                    	<p class="pm-comment-required"><b>No se admiten utilizar etiquetas html*</b></p>

					{{HTML::image(Captcha::img(), 'Captcha image')}}<br><br>
                         		    {{Form::text('captcha','',array('required' => 'required'))}}@if(Session::has('errorcaptcha')) <span class="errorCatpcha">Su texto no coincide con la imagen</span>@else <span class="xDCatpcha">Escriba el texto de la imagen <b>(Diferencie entre mayusculas y minusculas)</b></span> @endif <br>
	
                    			<input  class="pm-rounded-submit-btn pm-primary"  type="submit"  value="Enviar"/>

                                    
                                </div>

                                

                                

                                

                            </form>

                            


                        	

                        

                        </div>

                        

                        

                      </div>

                      <!-- Submit a comment form end -->   

                                    

                </div>

                <!-- Blog post area end -->

                

                

                <!-- Sidebar area -->

                <aside>

                    <div class="col-lg-4 col-md-4 col-sm-12 pm-sidebar">
                        
                        <!-- General Text widget -->

                        <div class="pm-widget">

                        	

                            <h2>UNA MANERA DE DISFRUTAR EL DELICIOSO SABOR DEL CAFÉ</h2>

                            

                            <p><p><img class="mifoto" src="{{asset('img/recetas/buen-cafe.jpg')}}"alt="secretos para un buen cafe"  />Las bebidas de caf&eacute; modificadas con sabores agradables es una alternativa m&aacute;s para que disfrutes del delicioso sabor del caf&eacute;.
En el mundo entero, el caf&eacute; d&iacute;a a d&iacute;a se posiciona m&aacute;s como un producto indispensable en la buena mesa, preparado en sencillas recetas.

En nuestro pa&iacute;s se ha estado creando conciencia de la importancia del caf&eacute;, no solo al reconocer sus virtudes y bondades como ingrediente en la cocina, sino como el producto con el cual se nos identifica en el &aacute;mbito internacional.

La exitosa aparici&oacute;n del caf&eacute; como uno de los ingredientes principales de algunos c&oacute;cteles, postres, galletas y tortas nos asegura el &eacute;xito que puede llagar a tener al utilizarlo en la preparaci&oacute;n de platos fuertes.

 

Lo invitamos a innovar, crear y degustar utilizando nuestro exquisito caf&eacute; Aguila Roja</p>

                        </div>

                        <!-- General Text widget end -->

                        

                        <!-- Recent Blog Posts widget -->

                        <div class="pm-widget">

                        

                            <h6>ÚLTIMAS RECETAS</h6>

                            

                            <ul class="pm-recent-blog-posts sidebar">



                                @foreach($ultimasRecetas as $ultimaReceta)

                                <!-- Post -->

                                <li>

                                    <div class="pm-recent-blog-post-thumb" style="background-image:url('../Uploads/<?php echo $ultimaReceta->FOTO2_ENTRADA ?>');"></div>

                                    <div class="pm-recent-blog-post-details">

                                        <h3><strong>{{ HTML::linkAction('MainController@accionReceta', $ultimaReceta->NOMBRE_ENTRADA,array($ultimaReceta->slug)) }}</strong></h3>

                                        <p class="pm-comment-count"><i class="fa fa-comment"></i>  {{$ultimaReceta->comentario->count()}} Comentarios</p>

                                        <p class="pm-contador-likes"style="font-size:12px;"><i class="fa fa-heart" ></i> <span <?php if($tReceta->ID_ENTRADA == $ultimaReceta->ID_ENTRADA){?>id="contadorLikes2" <?php } ?> >{{$ultimaReceta->megusta->count()}}</span> Me gusta</p>

                                    </div>

                                </li>

                                <!-- Post end -->

                                 @endforeach

                            </ul>

                            

                        </div>

                        <!-- Recent Blog Posts widget end -->    

                        

                    </div>

                </aside>

                <!-- Sidebar area end -->

                        

            </div>

        </div>

        </div>

        </div><!-- /pm_layout-wrapper -->

    

@stop