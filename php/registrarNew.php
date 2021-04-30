<?php
    include 'funciones.php';

    $cedula = $_POST["cedula"];
    $actividad = $_POST["actividad"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $carrera = $_POST["carrera"];
    $semestre = $_POST["semestre"];

    if(VerificarInput($nombre, $apellido, $email, $carrera, $semestre)){
        echo 'llene correctamente Todos los espacios';
        exit;
    }

    if(registraNew($cedula, $nombre, $apellido, $email, $carrera, $semestre)){
        if(registrarIngreso($cedula, $actividad)){
            echo '<script>
                alert("Registro exitoso");
                location.reload();
                </script>';
        }
    }else{
        echo 'Error al registrar';
    }
    
 ?>