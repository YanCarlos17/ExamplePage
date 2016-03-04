@extends('index')

@section('titulo')

	<title>Historia caf&eacute; aguila roja</title>

@stop

@section('descripcion')
    <meta name="description" content="Linea de tiempo de la historia de caf&eacute; aguila roja">
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

        <div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0"  style="background-image: url(img/produccion/cabezote-quienes-somos.jpg);">
            <div class="pm-sub-header-title-container">
            	<p class="pm-sub-header-title"><span>PROCESO DE PRODUCCI&Oacute;N</span></p>
            </div>
        </div>
         <!-- SUB-HEADER area end -->
        <!-- BODY CONTENT starts here -->
    <div class="container pm-containerPadding-top-60">
        <div class="contenedor_timeline" style="width: 110%;margin: 0px -5%;">
        	<div class="row">

            

            	<div class="col-lg-12"><h1 style="font-family:'Open Sans'!important;text-align:center;  color: #BC0001;  font-size: 30px;margin-top: 0;  margin-bottom: 20px;  padding: 0;">Proceso de producci&oacuten del caf&eacute;:</h1>
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
<!-- BEGIN TIMELINE -->
<div class="timelineFlat timelineFlatPortfolio tl3">
        <div class="item" data-id="01/01/2015" data-description="1: Recolecci&oacute;n">
            <img src="img/timeline/01-Recoleccion.jpg" alt="recoleccion de cafe"/>
            <div class="read_more" data-id="01/01/2015">Leer M&aacute;s</div><p class="textoItem">1: RECOLECCI&Oacute;N</p>
        </div>
        <div class="item_open" data-id="01/01/2015" >
            <div class="item_open_content">
                <h2 class="no-marg-top">1: Recolecci&oacute;n</h2>
                <p>De los arbustos que crecen bajo el sol y los mejores microclimas de la zona cafetera de Colombia se recolectan manualmente los frutos que hoy en día son procesados en nuestra compañía para la producción de un café de excelente cuerpo y aroma.</p>
            </div>
        </div>
        
        <div class="item" data-id="07/01/2015" data-description="2: Recepci&oacute;n de materia prima">
            <img src="img/timeline/02-Recepcion-MP.jpg" alt="recepcion de cafe"/>
            <div class="read_more" data-id="07/01/2015">Leer M&aacute;s</div><p class="textoItem">2: RECEPCI&Oacute;N DE MATERIA PRIMA</p>
        </div>
        <div class="item_open" data-id="07/01/2015" >
            <div class="item_open_content"style="overflow:overlay;">
                <h2 class="no-marg-top">2: Recepci&oacute;n de materia prima</h2>
                <p>Son enviados por nuestros proveedores muestras de las diferentes materias primas, para ser analizadas en el laboratorio examinando el aspecto del caf&eacute; y determinando la elegida para llevarla a la planta de producci&oacute;n.
La materia prima seleccionada llega a nuestras instalaciones en camiones por cuenta del proveedor, se extrae una muestra aleatoria y representativa de los 4 lados del veh&iacute;culo sacando aproximadamente 100 gramos por cada saco muestreado y recogi&eacute;ndolos en recipientes pl&aacute;sticos para ser llevados a analizar en el laboratorio.
Una vez est&eacute;n listas las muestras; procedemos a realizar una prueba olfativa identificando el olor caracter&iacute;stico del caf&eacute; verde fresco, (EN CASO DE ENCONTRAR UN OLOR DESAGRADABLE SE RECHAZA LA METERIA PRIMA) luego se pesan 100 gramos de caf&eacute; y son introducidos en el tostador de prueba con resistencias el&eacute;ctricas y por transmisi&oacute;n de calor se tuesta la muestra.
Luego medimos la densidad del grano por ca&iacute;da libre y la humedad por medio de equipos el&eacute;ctricos por m&eacute;todo de conductividad.
A los granos tostados se les mide el color o grado de tosti&oacute;n con un color&iacute;metro, utilizando un rayo infrarrojo y transmitiendo un resultado a la pantalla del equipo, para luego ser llevado a moler.
Se alistan las tazas por cada una de las muestras molidas adicionando 14 gramos por cada una y completando el nivel de agua desmineralizada a una temperatura promedio de 98 grados ºC, para as&iacute; obtener una bebida de cuerpo, aroma y frescura que buscamos en cada una de las muestras.
Se diligencia el formato correspondiente guardando los resultados obtenidos durante la prueba para tener una trazabilidad de la materia prima en proceso de producci&oacute;n y tomar decisi&oacute;n de recibirla en nuestra bodega.
Continuamos pesando el veh&iacute;culo en el cual llega el caf&eacute; verde, se procede a descargar el mismo dentro de la bodega de materia prima estibandolo y luego se identifica el lote con la siguiente informaci&oacute;n; cantidad recibida, proveedor, tipo de caf&eacute; y fecha de recibido, con el objeto de manejar un esquema excelente de rotaci&oacute;n de materia prima y trazabilidad en proceso.
</p>
            </div>
        </div>
        
        <div class="item" data-id="14/01/2015" data-description="3: Almacenamiento en bodega">
            <img src="img/timeline/03-Almacenamiento-en-bodega.jpg" alt="almacenamiento en bodega"/>
            <p class="textoItem">3: ALMACENAMIENTO EN BODEGA</p>
        </div>
        

        <div class="item" data-id="21/01/2015" data-description="4: Selecci&oacute;n y limpieza">
            <img src="img/timeline/04-Seleccion-y-limpieza.jpg" alt="seleccion y limpieza"/>
            <div class="read_more" data-id="21/01/2015">Leer M&aacute;s</div><p class="textoItem">4: SELECCI&Oacute;N Y LIMPIEZA</p>
        </div>
        <div class="item_open" data-id="21/01/2015" >
            <div class="item_open_content" style="overflow:overlay;">
                <h2 class="no-marg-top">4: Selecci&oacute;n y limpieza</h2>
                <p>Almacenada la materia prima en la bodega, iniciamos el proceso de
selección y limpieza, en donde vamos a eliminar todas las impurezas y materia extra&ntilde;a con
que llega la materia prima, utilizando la tecnología europea BUHLER, en un
equipo que por medio de mallas o zarandas y aspiración, selecciona granos
perfectos y de excelente calidad.<br>
El operario alimenta la máquina en una tolva de recibo donde depositamos el
grano verde con impurezas, este es llevado hasta la primera etapa de limpieza
por medio de un elevador de cangilones, medimos el flujo de entrada en una
bascula y registramos continuamente el peso en el controlador, damos paso al
grano por un tornillo sinfín, entrando al separador en el cual eliminamos todos los
objetos extraños de mayor diámetro que el café, con un movimiento vibratorio.
Posee dos juegos de mallas de mayor a menor diámetro donde extraemos esas
partículas y las recogemos en canales para ser empacadas y hacer su devolución.<br>
El grano verde entra al canal de aspiración y por medio de un ventilador retira los
granos livianos de los granos perfectos o de menor densidad, almacenándolos en
un filtro de desperdicio o ripio para luego ser devueltos al proveedor.
Pasamos a la segunda etapa de limpieza alimentando por caída libre donde eliminamos
los objetos minerales y ferrosos, este equipo posee un sistema de aspiración
y dos juegos de mallas de menor diámetro del café y con un movimiento vibratorio
seleccionamos los granos a utilizar.</p>
            </div>
        </div>
        
        <div class="item" data-id="28/01/2015" data-description="5: Almacenamiento en silos">
            <img src="img/timeline/05-Almacenamiento-en-silos.jpg" alt="almacenamiento en silos"/>
            <div class="read_more" data-id="28/01/2015">Leer M&aacute;s</div><p class="textoItem">5: ALMACENAMIENTO EN SILOS</p>
        </div>
        <div class="item_open" data-id="28/01/2015">
            <div class="item_open_content">
                <h2 class="no-marg-top">5: Almacenamiento en silos</h2>
                <p>El grano ya limpio es entregado a un elevador de cangilones para luego ser
pesado en la bascula y entregado al sistema de transporte neumático, cargando
cada uno de los silos de almacenamiento de café por variedad o tipo.<br>
Contamos con un silo para almacenamiento de café descafeinado, dos para
café tradicional y cuatro para café especial tipo gourmet o exportación.</p>
            </div>
        </div>
        
        <div class="item" data-id="02/02/2015" data-description="6: Tosti&oacute;n">
            <img src="img/timeline/06-Tostion.jpg" alt="Tostion"/>
            <div class="read_more" data-id="02/02/2015">Leer M&aacute;s</div><p class="textoItem">6: TOSTI&Oacute;N</p>
        </div>
        <div class="item_open" data-id="02/02/2015">
            <div class="item_open_content" style="overflow:overlay;">
                <h2 class="no-marg-top">6: Tosti&oacute;n</h2>
                <p>Una vez almacenado el grano en silos se procede a la segunda fase del proceso
de producción que es la tostión del café.
Para el proceso de café tradicional se transporta el grano a la tostadora por un
transporte mecánico tipo tornillo sinfín, entregando a un elevador de cangilones y
a su vez a la bascula, donde se procede al pesaje de un bache de 136 kilos para
alimentar la tolva de espera del café a tostar.<br>
La máquina de tostar esta fundamentada bajo la tecnología americana (JABEZ BURNS)
utilizando el principio de lecho fluidizado tostando con aire caliente y no con fuego directo.
El sistema de combustión es a gas en donde el fuego se concentra en una cámara y por
medio de un ventilador llevamos aire caliente hasta el tostador en un tiempo aproximado de
3 minutos a temperatura que van desde 240 a 250 grados ºC, cuenta con un sistema lógico
de control en donde el operario introduce la receta de tostión fijando parámetros de temperatura
y humedad conservando las cualidades del grano y aprovechando al máximo sus condiciones.
Al finalizar esta etapa; la maquina efectúa un roció de agua para suspender las reacciones
térmicas del grano aproximadamente 10 litros para un bache de 136 kilos, este es entregado
al enfriador en donde disminuimos la temperatura a 35 grados ºC por medio de un ventilador,
luego es llevado a la bascula de café tostado para registrar el peso en el sistema de control de
peso, en esta etapa se realiza un proceso de verificación de los parámetros del grano revisando
el grado de tostión por medio del colorímetro realizando prueba de taza.<br>
Una vez pesado el café tostado es entregado al sistema de transporte neumático y llevado a los
silos de almacenamiento en acero inoxidable por variedad o tipo.<br>
En el caso del café descafeinado el grano verde es transportado desde los silos hasta la bascula
por medio de transporte neumático, garantizando así un proceso diferente libre de contaminación
del café tradicional y este transporte también aplica para el café especial tipo exportación.</p>
            </div>
        </div>

        <div class="item" data-id="07/02/2015" data-description="7: Molienda">
            <img src="img/timeline/07-Molienda.jpg" alt="Molienda"/>
            <div class="read_more" data-id="07/02/2015">Leer M&aacute;s</div><p class="textoItem">7: MOLIENDA</p>
        </div>
        <div class="item_open" data-id="07/02/2015">
            <div class="item_open_content" style="overflow:overlay;">
                <h2 class="no-marg-top">7: Molienda</h2>
                <p>Almacenado el café tostado en los silos de acero inoxidable continuamos la tercera
fase del proceso de producción alimentando un tornillo sin fin por dosificadores de
peso los cuales regulan el tipo de mezcla a moler, la molienda utilizada es de martillos
con tecnología europea BUHLER que por medio de mallas o zarandas de igual diámetro
en donde se le da un tamaño uniforme a las partículas del café tostado y luego de
ser molido control de calidad realiza una validaci&oacute;n de la molienda garantizando uniformidad, liberada la l&iacute;nea es llevado por medio de un tornillo sinfín hasta el sistema de empaque automático
para posteriormente ser empacado en las máquinas de acuerdo a la referencia
establecida.<br>
En la molienda de café descafeinado y especial se ha destinado silos de almacenamiento
en acero inoxidable para cada uno de los tipos de café con sistemas de transporte
alterno para evitar el contacto entre estos y la posible contaminación del café descafeinado
contando con un molino de martillos y para el café especial molino de rodillos.</p>
            </div>
        </div>
        
        <div class="item" data-id="12/02/2015" data-description="8: Desgasificaci&oacute;n">
            <img src="img/timeline/08-Desgasificacion.jpg" alt="Desgasificacion"/>
            <div class="read_more" data-id="12/02/2015">Leer M&aacute;s</div><p class="textoItem">8: DESGASIFICACI&Oacute;N</p>
        </div>
        <div class="item_open" data-id="12/02/2015">
            <div class="item_open_content">
                <h2 class="no-marg-top">8: Desgasificaci&oacute;n</h2>
                <p>Al salir el café molido es entregado al sistema de transporte
neumático en acero inoxidable para ser llevado a silos de
desgasificación en donde extraemos el Co2 adquirido durante
la combustión en un tiempo aproximado de 8 horas por medio
de extractores.</p>
            </div>
        </div>
        
        <div class="item" data-id="17/02/2015" data-description="9: Empaque">
            <img src="img/timeline/09-Empaque.jpg" alt="Empaque"/>
            <div class="read_more" data-id="17/02/2015">Leer M&aacute;s</div><p class="textoItem">9: EMPAQUE</p>
        </div>
        <div class="item_open" data-id="17/02/2015">
            <div class="item_open_content" style="overflow:overlay;">
                <h2 class="no-marg-top">9: Empaque</h2>
                <p>Terminando esta fase del proceso continuamos con el empaque de
producto terminado por medio de máquinas empacadoras automáticas
alimentadas por un sistema de transporte mecánico de tornillo sinfín en
acero inoxidable, homogenizando la molienda y recirculando entre las
máquinas, estas dan forma al envase y dosifican el café molido de acuerdo
a la referencia a empacar.<br>
Para este fin utilizamos material laminado metalizado asegurando la conservación
del café tostado y molido durante su tiempo de almacenamiento para
el consumo. El material ingresa a la máquina en rollos y entra al cuello formador
de la máquina aplicando sellados en diferentes caras y codificando el envase.
Su tecnología americana se fundamenta en un programa lógico de control
donde se introduce la receta de empaque, además contamos con la opción
de aplicar nitrógeno en estado gaseoso, aclarando que este es un gas inerte que
conserva las propiedades del producto aumentando la vida útil del café.<br>
Una vez empacado el café en la máquina llega hasta una mesa de espera donde
es revisado y embalado en bolsas de polietileno, bolsas de papel kraft y cajas de
cartón en presentaciones que van desde 20 gramos 50, 125, 250, 500 y 2500 G.<br>
Permanentemente en esta etapa del proceso se realizan pruebas de control de
calidad al producto terminado, asegurando así la excelente calidad del producto
final verificando presentación, peso neto, codificación, grado de tostión, molienda y sabor.</p>
            </div>
        </div>

        <div class="item" data-id="22/02/2015" data-description="10: Almacenamiento">
            <img src="img/timeline/10-Almacenamiento.jpg" alt="Almacenamiento"/>
            <p class="textoItem">10: ALMACENAMIENTO</p>
        </div>
       
        
        <div class="item" data-id="28/02/2015" data-description="11: Despacho">
            <img src="img/timeline/11-Despacho.jpg" alt="Despacho"/>
            <p class="textoItem">11: DESPACHO</p>
        </div>
        

</div> <!-- /END TIMELINE -->  

                    

                </div>

            

            </div>
        </div>
    </div>
        

@stop