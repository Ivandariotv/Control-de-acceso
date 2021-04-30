
<?php
    include 'funciones.php';

    $cedula = $_POST["cedula"];
    $actividad = $_POST["actividad"];

    if(validarCedula($cedula, $actividad)){
        echo 'Llene correctamente todos los espacios';
    }else{
        if(verificaCedula($cedula)){
            if(registrarIngreso($cedula, $actividad)){
                echo '<script>
                alert("Registro exitoso");
                location.reload();
                </script>';
            }
        }else{
 ?>
    <script>
        document.getElementById("Registrar").style.display = "none";
        document.getElementById("RegistrarNew").style.display = "block";
    </script>
    
    <input type="text" placeholder="Nombre" id="nombre">
    <input type="text" placeholder="Apellido" id="apellido">
    <input type="email" placeholder="Correo electronico" id="email">
    <input type="text" placeholder="Carrera" id="carrera">
    <input type="text" placeholder="Semestre" id="semestre">

    <button type="button" name="btnRegistrar" id="Registrarnew">Registrar</button>
<?php

        }
    }
 ?>