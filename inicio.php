<?php
    include_once 'templates/head.php'
 ?>
    <div id="banner_login">
        <p>
            <font style="font-size: 25px">TU REGISTRO ES</font><br>
            <font style="font-size: 31px">IMPORTANTE</font><br>
            <font style="font-size: 23.5px">PARA NOSOTROS</font><br>
            <font style="font-size: 24px; line-height : 22px;">Y TU SEGURIDAD</font>
        </p>
    </div>
    <div id="cont_form_login">
        <form id="formRegistro">
          <img src="img/logo_unimeta.png"><br>
          <p1>Para continuar, Registra tu ingreso.</p1>
          <input type="text" placeholder="Ingrese su numero de Documento" id="cedula">
          <input type="text" placeholder="¿Que actividad va a realizar?" id="actividad">
          <div id="notasProm"></div>
          <div id="notasProm1"></div>
          <button type="button" name="btnRegistrar" id="Registrar">Registrar</button>
          <button type="button" name="btnRegistrar" id="RegistrarNew">Registrarnew</button>
          
          <p2>Términos y condiciones de uso</p2>
        </form>
    </div>

    <script>
		$('#Registrar').click(function(){
            var cedula = document.getElementById('cedula').value;
            var actividad = document.getElementById('actividad').value;
            
			var ruta = "cedula="+cedula+"&actividad="+actividad;
            
			$.ajax({
				url: 'php/registrar.php',
				type: 'POST',
				data: ruta,
			})

			.done(function(res){
				$('#notasProm').html(res);
			})
        });
        
        $('#RegistrarNew').click(function(){    
            var cedula = document.getElementById('cedula').value;
            var actividad = document.getElementById('actividad').value;
            var nombre = document.getElementById('nombre').value;
            var apellido = document.getElementById('apellido').value;
            var email = document.getElementById('email').value;
            var carrera = document.getElementById('carrera').value;
            var semestre = document.getElementById('semestre').value;
            var ruta ="cedula="+cedula+"&actividad="+actividad+"&nombre="+nombre+"&apellido="+apellido+"&email="+email+"&carrera="+carrera+"&semestre="+semestre;

	    	$.ajax({
	    		url: 'php/registrarNew.php',
	    		type: 'POST',
	    		data: ruta,
	    	})

	    	.done(function(guar){
	    		$('#notasProm1').html(guar);
	    	})
		});

	</script>

<?php 
    include_once 'templates/footer.php'
 ?>
 
