function objetoAjax(){
	var xmlhttp=false;
	try{
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}catch (e){
		try{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		} catch(E){
			xmlhttp=false;
		}
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp=new XMLHttpRequest();
	}
	return xmlhttp;
}

function like(idPag){
            var like = document.getElementById('btnLike');
            var contador=document.getElementById('contadorLikes');
            var contador2=document.getElementById('contadorLikes2');
            ajax = objetoAjax();
            ajax.open('POST',"../meGusta/"+idPag,true);
            ajax.onreadystatechange=function(){
                if(ajax.readyState==4){
                    like.innerHTML = '<i class="fa fa-heart"></i> Te gusta!';
                    contador.innerHTML =ajax.responseText;
                    contador2.innerHTML =ajax.responseText;
                }
            }
            ajax.send(null);

        }

function comentarr(idPag){
	/*
	var titulo=document.getElementById('titulo_comentarios');
	ajax = objetoAjax();
    $.ajax({
           type: "POST",
           url: url,

           data: $("#env_comentar").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
               titulo.innerHTML = ' Respuesta';
           }
         });

 

    return false; // Evitar ejecutar el submit del formulario.*/
    var url = "../comentario/"+idPag; // El script a dónde se realizará la petición.
    var titulo=document.getElementById('comentarios_for');
    $.ajax({
           type: "POST",
           url: url,
           dataType: 'json',
           data: $("#env_comentar").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(totalData)
           {
              var data = totalData.data;
              titulo.innerHTML='';
              //alert(data.total);
              for (var i = 0; i < data.length; i++) {
                    var r = data[i];
                    console.log(r.ID_COMENTARIO);
                    $('#comentarios_for').append('<div class="pm-comment-box-container"><div class="pm-comment-box-avatar-container"><div class="pm-comment-avatar"><img src="../img/blog/01_avatar.jpg" alt="avatar"></div><ul class="pm-comment-author-list"><li><p class="pm-comment-name">'+r.autor+'</p></li><li><p class="pm-comment-date">'+r.fecha+'</p></li></ul></div><div class="pm-comment"><p>'+r.TEXTO_COMENTARIO+'</p></div><!--<div class="pm-comment-reply-btn"><a href="#" class="pm-rounded-btn pm-primary small">post a reply</a></div>--></div>');
                }
           }
         });
 }

