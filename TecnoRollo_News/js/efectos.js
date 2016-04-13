
//var urlWeb='http://localhost/TecnoRollo_News/';
var urlWeb='http://www.tecnorrollo.com/TecnoRollo_News/';

function ventanas(valor){
	if (valor==1){
	$('#cogebox').fadeIn(500);
	}
	else if (valor==2){
	$('#cogebox').fadeOut(500);
	}
}

function login_ajax(user,pass){
	
	    if($("#chekar").is(':checked')) {  
		var recordar='on';
		} else {
		var recordar='off';	
		}
		
	
	     if (user=='' || pass==''){
			$('#error2').slideDown(500);
			$('#error2').html('Completa los 2 campos!');
			 }
			 else {			 
		$.ajax({
		type: 'POST',
		url: urlWeb + 'inc/loguin.php',
		data: 'user=' + user + '&pass=' + pass + '&recordar=' + recordar,
		success: function(htmlrespuesta) {
			if (htmlrespuesta=='yes'){
				location.reload();
			}
			else if (htmlrespuesta=='error'){
		    $('#error2').slideDown(500);
			$('#error2').html('Datos incorrectos!');
			
			}
	   }
	});
	}
}

function registro_ajax(user,pass,pass2){
	
	   if (user=='' || pass=='' || pass2==''){
		   $('#error').slideDown(500);
		    $('#error').html('Completa los campos!');
		   }
		   else if (pass!=pass2){
			   $('#error').slideDown(500);
		    $('#error').html('Los password no coinciden!');
			}
	     else  if ((user!='' && pass!='' && pass2!='') && (pass==pass2)) {
			 
			 		$.ajax({
		type: 'POST',
		url: urlWeb + 'inc/add_user.php',
		data: 'user=' + user + '&pass=' + pass,
		success: function(htmlregistro) {
			if (htmlregistro=='correcto'){
		    $('#registro_ok').html('Registro correcto!');
			}
			else if (htmlregistro=='incorrecto'){
			$('#error').slideDown(500);
		    $('#error').html('El numbre de usuario no esta disponible!');
			}
	   }
	});
	//$('#registro_ok').html('Registro correcto');
}

}

function set_cookie(valor){
		$.ajax({
		type: 'POST',
		url: urlWeb + 'inc/cookie.php',
		data: 'valor=' + valor
	});
	 $('#cookies').css("display","none");
}


/*//FUNCION AJAX		
		$.ajax({
		type: 'POST',
		url: urlWeb + 'inc/recuperar.php',
		data: 'email=' + emailajax,
		success: function(html) {
	   }
	});
	
	//location.reload();

	
//CAMBIAR DISPLAY
       $('#error_login').css("display","none");
	   
//RETRASAR ACCION
        setTimeout(function(){
		},1000);

//IMPRIMIR HTML
        $('#resultados').html(html);
		
//DESACTIVAR BOTON
        document.getElementById('mi_btn').disabled=false;
		
//ACTUALIZAR CKEDITOR
    for (instance in CKEDITOR.instances) {
                CKEDITOR.instances.mensajes.updateElement();
            }
			
//ELIMINAR CARACTERES
         conteotitulo = titulo.split(" ").join("");
		 
//CONFIRMARACCION
function confirmaracion(valor){
	if (valor==1){
     return confirm('Banear al user?');
    }

}*/